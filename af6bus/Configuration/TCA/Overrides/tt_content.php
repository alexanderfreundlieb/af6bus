<?php

declare(strict_types=1);
defined('TYPO3') or die();

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

