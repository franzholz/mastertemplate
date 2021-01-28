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
	'version' => '0.5.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '9.5.0-10.4.99',
			'modern_template_building' => '1.0.1-1.0.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

