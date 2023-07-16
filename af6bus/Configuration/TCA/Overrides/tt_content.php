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
