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
    'version' => '0.6.2',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-13.4.99',
            'modern_template_building' => '1.0.1-1.2.99',
            'patchlayout' => '0.1.0-0.3.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

