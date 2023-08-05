<?php

/**
 * Extension Manager/Repository config file for ext "af6bus".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'AF6Bus',
    'description' => 'Simple sitepackage, best used together with af6passenger',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
            'ws_scss' => '^12.0',
		    'container' => '^2.2',
            'content_defender' => '^3.2'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'AlexanderFreundlieb\\Af6bus\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Alexander Freundlieb',
    'author_email' => 'alexander.freundlieb@icloud.com',
    'author_company' => 'Alexander Freundlieb',
    'version' => '2.0.0',
];
