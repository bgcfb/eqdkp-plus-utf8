<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2010
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

include_once('itt_parser.aclass.php');

if(!class_exists('wowhead')) {
	class wowhead extends itt_parser {

		public static $shortcuts = array('pdl', 'puf' => 'urlfetcher');

		public $supported_games = array('wow');
		public $av_langs = array('en' => 'en_US', 'de' => 'de_DE', 'fr' => 'fr_FR', 'ru' => 'ru_RU', 'es' => 'es_ES');

		public $settings = array(
			'itt_icon_loc' => array('name' => 'itt_icon_loc',
									'language' => 'pk_itt_icon_loc',
									'fieldtype' => 'text',
									'size' => false,
									'options' => false,
									'default' => 'http://static.wowhead.com/images/wow/icons/large/'),
			'itt_icon_ext' => array('name' => 'itt_icon_ext',
									'language' => 'pk_itt_icon_ext',
									'fieldtype' => 'text',
									'size' => false,
									'options' => false,
									'default' => '.jpg'),
			'itt_default_icon' => array('name' => 'itt_default_icon',
										'language' => 'pk_itt_default_icon',
										'fieldtype' => 'text',
										'size' => false,
										'options' => false,
										'default' => 'inv_misc_questionmark')
		);

		private $searched_langs = array();

		public function __destruct(){
			unset($this->searched_langs);
			parent::__destruct();
		}

		protected function searchItemID($itemname, $lang, $searchagain=0) {
			$searchagain++;
			$this->pdl->log('infotooltip', 'wowhead->searchItemID called: itemname: '.$itemname.', lang: '.$lang.', searchagain: '.$searchagain);
			$item_id = 0;
			
			// Ignore blank names.
			$name = trim($itemname);
			if (empty($name)) { return null; }

			$encoded_name = urlencode($name);
			$encoded_name = str_replace('+' , '%20' , $encoded_name);
			$url = ($lang == 'en') ? 'www' : $lang;#
			$url = 'http://'.$url.'.wowhead.com/item='.$encoded_name.'&xml';
			$this->pdl->log('infotooltip', 'Search for ItemID at '.$url);
			$item_data = $this->puf->fetch($url);
			
			$xml = simplexml_load_string($item_data);
			if(is_object($xml)) {
				$item_id = (int)$xml->item->attributes()->id;
			} else {
				$this->pdl->log('infotooltip', 'Invalid XML');
			}
			//search in other languages
			if(!$item_id AND $searchagain < count($this->av_langs)) {
				$this->pdl->log('infotooltip', 'No Items found.');
				if(count($this->config['lang_prio']) >= $searchagain) {
					$this->pdl->log('infotooltip', 'Search again in other language.');
					$this->searched_langs[] = $lang;
					foreach($this->config['lang_prio'] as $slang) {
						if(!in_array($slang, $this->searched_langs)) {
							return $this->searchItemID($itemname, $slang, $searchagain);
						}
					}
				}
			}
			$debug_out = ($item_id > 0) ? 'Item-ID found: '.$item_id : 'No Item-ID found';
			$this->pdl->log('infotooltip', $debug_out);
			return array($item_id, 'items');
		}

		protected function getItemData($item_id, $lang, $itemname='', $type='items'){
			$orig_id = $item_id;
			
			if(!$item_id) {
				$item['baditem'] = true;
				return $item;
			}
			
			$bonus = 0;
			
			$myItemData = array(
					'ench' => 0,
					'gems' => array(),
					'lvl'  => 0,
					'upgd' => 0,
					'bonus' => array(),
			);
			
			$arrItemData = explode(':', $item_id);
			if (count($arrItemData) > 1){
				$item_id = $arrItemData[0];
				$arrBonus = array();

				foreach($arrItemData as $key => $val){
					if ($key == 1) $myItemData['ench'] = $val;
					if ($key == 8) $myItemData['lvl'] = $val;
					if ($key == 9) $myItemData['upgd'] = $val;
					if ($key > 2 && $key < 7){
						$myItemData['gems'][] = $val;
					}
					
					if ($key > 11){
						$myItemData['bonus'][] = $val;
					}
				}
				//112417:0:0:0:0:0:0:0:lvl90:upg 491:dif 5:2:448:449
				//itemID:enchant:gem1:gem2:gem3:gem4:suffixID:uniqueID:level:upgradeId:instanceDifficultyID:numBonusIDs:bonusID1:bonusID2...
				
			}

			$item = array('id' => $item_id);
			$url = ($lang == 'en') ? 'www' : $lang;
			
			$item['link'] = 'http://'.$url.'.wowhead.com/item='.$item['id'].'&power&bonus='.implode(':', $myItemData['bonus']).'&upgd='.$myItemData['upgd'].'&lvl='.$myItemData['lvl'].'&ench='.$myItemData['ench'].'&gems='.implode(',',$myItemData['gems']);

			$this->pdl->log('infotooltip', 'fetch item-data from: '.$item['link']);
			$someJS = $this->puf->fetch($item['link'], array('Cookie: cookieLangId="'.$lang.'";'));
			if ($someJS){
				$arrMatches = array();
				$intCount = preg_match("/name_(.*): '(.*)',(\s*)quality: (.*),(\s*)icon: '(.*)',(\s*)tooltip_(.*): '(.*)'/", $someJS, $arrMatches);
				if ($intCount){

					$item['name'] = htmlentities(stripslashes($arrMatches[2]));
					
					$html = $arrMatches[9];
					$template_html = trim(file_get_contents($this->root_path.'infotooltip/includes/parser/templates/wow_popup.tpl'));
					$item['html'] = str_replace('{ITEM_HTML}', stripslashes($html), $template_html);
					$item['lang'] = $lang;
					
					$item['icon'] = htmlentities($arrMatches[6]);
					$item['color'] = 'q'.(int)$arrMatches[4];
					
					//Reset Item ID, because the full name is the one we should store in DB
					$item['id'] = $orig_id;
					return $item;
					
				} else {
					$this->pdl->log('infotooltip', 'no match found');
					$item['baditem'] = true;
					return $item;
				}
			} else {
				$this->pdl->log('infotooltip', 'no data from URL');
				$item['baditem'] = true;
				return $item;
			}

			$item['baditem'] = true;
			return $item;
		}

		/*
		 * Translate Old-Colors to new css-classes
		 */
		private function convert_color($color) {
			if(is_numeric($color)) return $color;
			$color_array = array(
				'Verbreitet' => 1,
				'Common' => 1,
				'Común' => 1,
				'Classique' => 1,
				'Обычный' => 1,
				'Selten' => 2,
				'Uncommon' => 2,
				'Bonne' => 2,
				'Poco Común' => 2,
				'Необычный' => 2,
				'Rar' => 3,
				'Rare' => 3,
				'Raro' => 3,
				'Редкий' => 3,
				'Episch' => 4,
				'Epic' => 4,
				'Épica' => 4,
				'Épique' => 4,
				'Эпический' => 4,
				'Legendär' => 5,
				'Legendary' => 5,
				'Légendaire' => 5,
				'Legendaria' => 5,
				'Легендарный' => 5
			);
			return $color_array[$color];
		}
	}
}
if(version_compare(PHP_VERSION, '5.3.0', '<')) registry::add_const('short_wowhead', wowhead::$shortcuts);
?>