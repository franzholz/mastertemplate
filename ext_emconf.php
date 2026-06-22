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
    'clearCacheOnLoad' => 0,
    'author_company' => 'jambage.com',
    'version' => '0.6.3',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-14.3.99',
            'modern_template_building' => '1.1.1-1.3.99',
            'patchlayout' => '0.2.0-0.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

