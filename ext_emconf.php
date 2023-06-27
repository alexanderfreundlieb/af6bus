<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage_alexander_freundlieb".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Sitepackage Alexander Freundlieb',
    'description' => 'Sitepackage used for all websites developed by Alexander Freundlieb',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'AlexanderFreundlieb\\SitepackageAlexanderFreundlieb\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Alexander Freundlieb',
    'author_email' => 'alexander.freundlieb@icloud.com',
    'author_company' => 'Alexander Freundlieb',
    'version' => '1.0.0',
];
