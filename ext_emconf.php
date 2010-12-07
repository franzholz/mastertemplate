<?php

########################################################################
# Extension Manager/Repository config file for ext "mastertemplate".
#
# Auto generated 07-12-2010 14:40
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Template for Websites',
	'description' => 'This extension has been created using the master template provided by the NRW user group.',
	'category' => 'fe',
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
	'shy' => '',
	'dependencies' => 'statictemplates',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.4.0-4.5.99',
			'statictemplates' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:29:{s:9:"ChangeLog";s:4:"1add";s:10:"README.txt";s:4:"ee2d";s:20:"class.ext_update.php";s:4:"48cb";s:28:"class.tx_mastertemplates.php";s:4:"559d";s:12:"ext_icon.gif";s:4:"1bdc";s:17:"ext_localconf.php";s:4:"c43d";s:14:"ext_tables.php";s:4:"e2cf";s:25:"ext_tables_static+adt.sql";s:4:"90b4";s:15:"css/default.css";s:4:"4596";s:16:"css/mainmenu.css";s:4:"0a62";s:15:"css/noright.css";s:4:"bcd3";s:15:"css/submenu.css";s:4:"2e76";s:14:"doc/manual.sxw";s:4:"98af";s:42:"hooks/class.tx_mastertemplate_hooks_em.php";s:4:"e36d";s:24:"html/mastertemplate.html";s:4:"fc38";s:37:"html/mastertemplate_FILES/default.css";s:4:"edb9";s:41:"static/adaptions/tt_content/constants.txt";s:4:"31c2";s:37:"static/adaptions/tt_content/setup.txt";s:4:"8778";s:32:"static/columns/2_3/constants.txt";s:4:"c093";s:28:"static/columns/2_3/setup.txt";s:4:"0ee3";s:30:"static/define/config/setup.txt";s:4:"2638";s:30:"static/define/header/setup.txt";s:4:"9d89";s:32:"static/temp/breadcrumb/setup.txt";s:4:"d9ae";s:28:"static/temp/footer/setup.txt";s:4:"53c2";s:26:"static/temp/left/setup.txt";s:4:"3271";s:26:"static/temp/logo/setup.txt";s:4:"dc38";s:30:"static/temp/mainmenu/setup.txt";s:4:"e56d";s:27:"static/temp/right/setup.txt";s:4:"3389";s:29:"static/temp/submenu/setup.txt";s:4:"42da";}',
	'suggests' => array(
	),
);

?>