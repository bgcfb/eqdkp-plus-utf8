<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2002
 * -----------------------------------------------------------------------
 * @copyright   2006-2011 EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * 
 */
 
if (!defined('EQDKP_INC')) {
	die('You cannot access this file directly.');
}

//Language: English 2.0	
//Created by EQdkp Plus Translation Tool on  2014-02-20 09:20
//File: language/english_2.0/lang_install.php
//Source-Language: german_2.0

$lang = array( 
	"page_title" => 'EQDKP-PLUS %s 安装',
	"back" => '保存并返回',
	"continue" => '继续',
	"language" => '语言',
	"inst_finish" => '完成安装',
	"error" => '错误',
	"warning" => '警告',
	"success" => '成功',
	"yes" => '是',
	"no" => '否',
	"retry" => '重试',
	"skip" => '跳过',
	"step_order_error" => 'Step-Order error: Step not found. Please ensure that all files are uploaded correctly. For further information please visit our forums at <a href="http://eqdkp-plus.eu/forum">http://eqdkp-plus.eu/forum</a>.',
	"licence" => '许可证协议',
	"php_check" => '预安装检查',
	"ftp_access" => 'FTP 设置',
	"encryptionkey" => '加密秘钥',
	"data_folder" => '数据目录',
	"db_access" => '数据库访问',
	"inst_settings" => '设置',
	"admin_user" => '管理员账号',
	"end" => '完成安装',
	"welcome" => 'Welcome to the installer for EQdkp Plus. We have worked hard to make this process easy and fast. To get started simply accept our license agreement by clicking \'Accept & Start Installation\' below.',
	"accept" => '接受并开始安装',
	"license_text" => '<b>EQdkp Plus is published under Creative Commons Licence "Attribution-NonCommercial-ShareAlike 3.0 Unported (CC BY-NC-SA 3.0)".</b><br /><br /> The full licence text can be found at https://creativecommons.org/licenses/by-nc-sa/3.0/legalcode.<br /><br />
	This is a human-readable summary of the Legal Code:<br /><br />
	<b>You are free:</b><ul><li><b>to Share</b> — to copy, distribute and transmit the work </li><li><b>to Remix</b> — to adapt the work </li></ul>
	<b>Under the following conditions:</b><ul><li><b>Attribution</b> — You must attribute the work in the manner specified by the author or licensor (but not in any way that suggests that they endorse you or your use of the work).</li><li><b>Noncommercial</b> — You may not use this work for commercial purposes. </li><li><b>Share Alike</b> — If you alter, transform, or build upon this work, you may distribute the resulting work only under the same or similar license to this one. </li></ul>
	<b>With the understanding that: </b><ul><li><b>Waiver</b> — Any of the above conditions can be waived if you get permission from the copyright holder. </li><li><b>Public Domain</b> — Where the work or any of its elements is in the public domain under applicable law, that status is in no way affected by the license. </li><li><b>Other Rights</b> — In no way are any of the following rights affected by the license: <ul><li>Your fair dealing or fair use rights, or other applicable copyright exceptions and limitations; </li><li>The author\'s moral rights; </li><li>Rights other persons may have either in the work itself or in how the work is used, such as publicity or privacy rights. </li></ul> </li><li><b>Notice</b> — For any reuse or distribution, you must make clear to others the license terms of this work. The best way to do this is with a link to this web page (https://creativecommons.org/licenses/by-nc-sa/3.0/). </li></ul>
',
	"table_pcheck_name" => '名称',
	"table_pcheck_required" => '必须',
	"table_pcheck_installed" => '当前',
	'table_pcheck_rec'		=> 'Rec.',
	"module_php" => 'PHP 版本',
	"module_mysql" => 'MySQL 数据库',
	"module_zLib" => 'zLib PHP 模块',
	"module_safemode" => 'PHP Safemode',
	"module_curl" => 'cURL PHP 模块',
	"module_fopen" => 'fopen PHP 函数',
	"module_soap" => 'SOAP PHP 模块',
	"module_autoload" => 'spl_autoload_register PHP 函数',
	"module_hash" => 'hash PHP 函数',
	"module_memory" => 'PHP 内存限制',
	'module_json'			=> 'JSON PHP 模块',
	"safemode_warning" => '<strong>WARNING</strong><br/>Because the PHP Safe mode is active, you have to use the FTP mode in the next Step in order to use EQdkp Plus!',
	"phpcheck_success" => 'The minimum requirements for the installation of EQDKP-Plus are met. The installation can proceed.',
	"phpcheck_failed" => 'The minimum requirements for the installation of EQDKP-Plus are not met.<br />A selection of suitable hosting companies can be found on our <a href="http://eqdkp-plus.eu" target="_blank">website</a>',
	"do_match_opt_failed" => 'Some recommends are not met. EQDKP-Plus will work on this system; however, maybe not all features will be available.',
	"ftphost" => 'FTP 主机',
	"ftpport" => 'FTP 端口',
	"ftpuser" => 'FTP 用户名',
	"ftppass" => 'FTP 密码',
	"ftproot" => 'FTP base dir',
	"ftproot_sub" => '(Path to the root directory of the FTP user)',
	"useftp" => '使用 FTP 模式作为文件处理器',
	"useftp_sub" => '(You can change it later by editing the config.php)',
	"safemode_ftpmustbeon" => 'Since PHP safe mode is on, the FTP details must be completed to continue the installation.',
	"ftp_connectionerror" => 'The FTP connection could not be established. Please check the FTP host and the FTP port.',
	"ftp_loginerror" => 'The FTP login was not successful. Please check your FTP username and FTP password.',
	"plain_config_nofile" => 'The file <b>config.php</b> is not available and automatic creation failed. <br />Please create a blank text file with the name <b>config.php</b> and set the permissions with chmod 777',
	"plain_config_nwrite" => 'The <b>config.php</b> file is not writeable. <br /> Please set the correct permissions. <b>chmod 0777 config.php</b>.',
	"plain_dataf_na" => 'The folder <b>'.registry::get_const('root_path').'data/</b> is not available.<br /> Please create this folder. <b>mkdir data</​​b>.',
	"plain_dataf_nwrite" => 'The folder <b>'.registry::get_const('root_path').'data/</b> is not writeable.<br /> Please set the correct permissions. <b>chmod -R 0777 data</​​b>.',
	"ftp_datawriteerror" => 'The Data folder could not be written to. Is the FTP root path set  correctly?',
	"ftp_info" => 'To improve security and functionality, you can choose to allow an ftp account of your choosing to perform file interactions on the server. This reduces the need to use more open server permissions, and may be required on some hosting configurations. To use this optional setting please provide a ftp user with permissions to access your installation, and select the \'FTP Mode\' tick box. If you are not using FTP Mode you may simply select proceed on this page.',
	"ftp_tmpinstallwriteerror" => 'The folder <b>'.registry::get_const('root_path').'data/97384261b8bbf966df16e5ad509922db/tmp/</b> is not writable.<br />To write the config-file, CHMOD 777 is required. This folder will be deleted after the installation process.',
	"ftp_tmpwriteerror" => 'The folder <b>'.registry::get_const('root_path').'%stmp/</b> is not writable.<br />Using FTP-Mode requires CHMOD 777 for this folder. This is the only folder needing writing permissions.',
	"dbtype" => '数据库类型',
	"dbhost" => '数据库主机',
	"dbname" => '数据库名称',
	"dbuser" => '数据库用户名',
	"dbpass" => '数据库密码',
	"table_prefix" => 'EQDKP-Plus 表前缀',
	"test_db" => '测试数据库',
	"prefix_error" => 'No or invalid database prefix specified! Please enter a valid prefix.',
	"INST_ERR_PREFIX" => 'An EQdkp installation with that prefix already exists. Delete all tables with that prefix and repeat this step once you have used the "Back" button. Alternatively, you can choose a different prefix, e.g. if you want to install multiple sets of EQDKPlus data in a database.',
	"INST_ERR_DB_CONNECT" => 'Could not connect to the database, see error message below.',
	"INST_ERR_DB_NO_ERROR" => 'No error message given.',
	"INST_ERR_DB_NO_MYSQLI" => 'The version of MySQL installed on this machine is incompatible with the “MySQL with MySQLi Extension” option you have selected. Please try the “MySQL” option instead.',
	"INST_ERR_DB_NO_NAME" => 'No database name specified.',
	"INST_ERR_PREFIX_INVALID" => 'The table prefix you have specified is invalid for your database. Please try another, removing characters such as hyphen, apostrophe or forward- or back-slashes.',
	"INST_ERR_PREFIX_TOO_LONG" => 'The table prefix you have specified is too long. The maximum length is %d characters.',
	"dbcheck_success" => 'The database was checked. It found no errors or conflicts. The installation can be continued safely.',
	"encryptkey_info" => 'The encryption key is part of the encryption process used to protect sensitive data in the database, such as your users email addresses. Even if your database is compromised, without the encryption key your data remains encoded and secure. Therefore please choose a secure key, and ensure that you store a safe copy. Nobody else can ever retrieve it for you if it becomes lost!',
	"encryptkey" => '加密秘钥',
	"encryptkey_help" => '(最小长度 6 字符)',
	"encryptkey_repeat" => '确认加密秘钥',
	"encryptkey_no_match" => '加密秘钥不匹配',
	"encryptkey_too_short" => 'The encryption key is too short. Minimum length is 6 chars.',
	"inst_db" => '安装数据库',
	"lang_config" => '语言设置',
	"default_lang" => '默认语言',
	"default_locale" => 'Default localization',
	"game_config" => '游戏设置',
	"default_game" => '默认游戏',
	"server_config" => '服务器设置',
	"server_path" => '脚本路径',
	"grp_guest" => 'Guests',
	"grp_super_admins" => '超级管理员',
	"grp_admins" => '管理员',
	"grp_officers" => 'officers',
	"grp_writers" => 'Editors',
	"grp_member" => 'Members',
	"grp_guest_desc" => 'Guests are not signed in users',
	"grp_super_admins_desc" => 'Super administrators have all rights',
	"grp_admins_desc" => 'Administrators do not have all admin rights',
	"grp_officers_desc" => 'Officers are able to manage raids',
	"grp_writers_desc" => 'Editors are able to write and manage news',
	"grp_member_desc" => 'member',
	"game_info" => 'More supported games can be downloaded after the installation at the extension-management.',
	"timezone" => 'Timezone of the server',
	"startday" => 'First day of the week',
	"sunday" => 'Sunday',
	"monday" => 'Monday',
	"time_format" => 'H:i',
	"date_long_format" => 'j. F Y',
	"date_short_format" => 'd.m.y',
	"style_jsdate_nrml" => 'dd/MM/YYYY',
	"style_jsdate_short" => 'd.M',
	"style_jstime" => 'h:mm tt',
	"welcome_news_title" => 'Welcome to EQDKP-Plus',
	"welcome_news" => '<p>The installation of your EQdkp Plus was completed successfully - you can now set it up according to your wishes.</p>
<p>You can find assistance to administration and general use in our <a href="http://eqdkp-plus.eu/wiki/" target="_blank">Wiki</a>.</p>
<p>For further support, please visit our <a href="http://eqdkp-plus.eu/forum" target="_blank">Forum</a>.</p>
<p>Have fun with EQdkp Plus! Your EQdkp Plus team</p>',
	"feature_news_title" => 'New Features of EQdkp Plus',
	"feature_news" => '<p>EQdkp Plus 2.0 contains a lot of new Features. This article should introduce the most importent of them.</p> <h3>Articlesystem</h3> <p>Instead of news and infopages, we introduced a complete new article system. Each news and page is now an article. You can group your articles using article-categories. Moreover, you can realise for example blogs for your guild and users.</p> <p>You can divide a single article using the Readmore- and Pagebreak-Methods. Also, you can insert Image-Galeries, Items or Raidloot using the appropriate Editor-Buttons.</p> <h3>Media-Management</h3> <p>Using the new Media-Management in ACP or Editor, you can now easily insert Media into your articles. For example, files can be uploaded using Drag&Drop. Also, you can even edit images in the Filebrowser.</p> <h3>Menu-Management</h3> <p>We have removed all menus except one. And the last one could be totally configured. You can position the entries using Drag&Drop in 3 levels, so it\'s possible to create submenus. You can still create links to external pages, but also add direct links to articles or articlecategories.</p> <h3>Portal-Management</h3> <p>In former times, there was only one portallayout, you had on every page the same portal modules. That\'s why we implemented the portallayouts. Now you can assign a portallayout to each articlecategory.</p> <p>Furthermore, you can create own portal blocks that you can embedd in your template, for example for editing links in your footer.</p>',
	"role_healer" => 'Healer',
	"role_tank" => 'Tank',
	"role_range" => 'Ranged DPS',
	"role_melee" => 'Melee DPS',
	"create_user" => '创建访问',
	"username" => '管理员用户名',
	"user_password" => '管理员密码',
	"user_pw_confirm" => '确认管理员密码',
	"user_email" => '管理员 email 地址',
	"auto_login" => '记住我 (cookie)',
	"user_required" => '用户名, email 和密码是必填字段',
	"no_pw_match" => '密码不匹配。',
	"install_end_text" => '安装现在已成功完成。',
	
	//Categories
	'category1'	=> 'System',
	'category2'	=> 'News',
	'category3'	=> 'Events',
	'category4'	=> 'Items',
	'category5'	=> 'Raids',
	'category6'	=> 'Calendar',
	'category7'	=> 'Roster',
	'category8'	=> 'Points',
	'category9'	=> 'Character',
	
	//Articles
	'article5' => 'Character',
	'article6' => 'Roster',
	'article7' => 'Events',
	'article8' => 'Items',
	'article9' => 'Points',
	'article10' => 'Raids',
	'article12' => 'Calendarevent',
	'article13' => 'Calendar',
	'article14' => 'Guild Rules',
	'article15' => 'Privacy Policy',
	'article16' => 'Legal Notice',
);

?>