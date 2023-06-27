<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'sitepackage_alexander_freundlieb';

    /**
     * Default TypoScript for SitepackageAlexanderFreundlieb
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Sitepackage Alexander Freundlieb'
    );
});
