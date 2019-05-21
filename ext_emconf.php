<?php

########################################################################
# Extension Manager/Repository config file for ext "mastertemplate".
#
#
# Manual updates
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Master Template',
	'description' => 'This extension makes available the setup of the master template. Originally developed by the NRW user group.',
	'category' => 'templates',
	'author' => 'Franz Holzinger',
	'author_email' => 'franz@ttproducts.de',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'author_company' => 'jambage.com',
	'version' => '0.4.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-9.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

