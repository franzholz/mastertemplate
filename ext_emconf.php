<?php

########################################################################
# Extension Manager/Repository config file for ext "mastertemplate".
#
#
# Manual updates
########################################################################

$EM_CONF[$_EXTKEY] = [
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
    'version' => '0.5.2',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'modern_template_building' => '1.0.1-1.0.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

