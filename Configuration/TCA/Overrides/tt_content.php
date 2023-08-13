<?php

declare(strict_types=1);
defined('TYPO3') or die();

/* Banner */
// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        // title
        'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.af6bus_banner.title',
        // plugin signature: extkey_identifier
        'af6bus_banner',
        // icon identifier
        'banner-icon',
    ],
    'header',
    'before'
);

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['af6bus_banner'] = array(
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            assets,
		    bodytext,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
             rowDescription,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
');

// edit standard fields for "t8jetpack_banner" Elements
$GLOBALS['TCA']['tt_content']['types']['af6bus_banner']['columnsOverrides'] = array(
    // change label for Banner Text
    'bodytext' => [
        'config' => [
            'enableRichtext' => true,
        ]
    ],
);

// Add custom fields
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    [
        'nav_use_subtitle' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.af6bus_banner.nav_use_subtitle',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => ''
                    ]
                ],
            ],
        ],
        'background' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.af6bus.background',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.af6bus.background.none', 'value' => 'none',
                    ]
                ],
            ],
        ],
        'vertical_align' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.af6bus.vertical_align',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    [
                        'label' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.af6bus.vertical_align.top', 'value' => 'top',
                    ],
                    [
                    'label' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.af6bus.vertical_align.center', 'value' => 'center',
                    ],
                    [
                        'label' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.af6bus.vertical_align.bottom', 'value' => 'bottom',
                    ]
                ],
            ],
        ]
    ]
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'headers',
    'nav_use_subtitle',
    'after:subheader'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    '--linebreak--,background',
    'after:space_after_class'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'gallerySettings',
    '--linebreak--,vertical_align',
    'after:imagecols'
);

/*** Container ***/
/* 2 Col */
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'af6bus_2col', // CType
            'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.2col', // label
            '', // description
            [
                [
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.first', 'colPos' => 101],
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.second', 'colPos' => 102]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
);

/* 2 Col 33 left, 66 right */
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'af6bus_2col3366', // CType
            'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.2col3366', // label
            '', // description
            [
                [
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.first', 'colPos' => 101],
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.second', 'colPos' => 102]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col-right.svg')
);

/* 2 Col 66 left, 33 right */
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'af6bus_2col6633', // CType
            'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.2col6633', // label
            '', // description
            [
                [
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.first', 'colPos' => 101],
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.second', 'colPos' => 102]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col-left.svg')
);

/* 3 Col */
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'af6bus_3col', // CType
            'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.3col', // label
            '', // description
            [
                [
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.first', 'colPos' => 101],
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.second', 'colPos' => 102],
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.third', 'colPos' => 103]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
);

/* 2 Col */
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'af6bus_4col', // CType
            'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.4col', // label
            '', // description
            [
                [
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.first', 'colPos' => 101],
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.second', 'colPos' => 102],
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.third', 'colPos' => 103],
                    ['name' => 'LLL:EXT:af6bus/Resources/Private/Language/locallang.xlf:tca.container.cols.fourth', 'colPos' => 104]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:container/Resources/Public/Icons/container-4col.svg')
);
