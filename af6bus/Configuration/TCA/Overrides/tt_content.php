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
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
         assets,
		 bodytext,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
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
