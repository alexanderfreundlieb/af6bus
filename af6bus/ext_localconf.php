<?php

declare(strict_types=1);
defined('TYPO3') or die();

/* Typoscript */
// add pagets
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("@import 'EXT:af6bus/Configuration/TypoScript/PageTS/pagets.typoscript'");

/* Icons */
// register icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);

$iconRegistry->registerIcon(
    'banner-icon', // Icon-Identifier, z.B. tx-myext-action-preview
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:af6bus/Resources/Public/Icons/banner.svg']
);

/*RTE Configs */
// register RTE config
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['af6busRTE'] = 'EXT:af6bus/Configuration/RTE/af6busRTE.yaml';
