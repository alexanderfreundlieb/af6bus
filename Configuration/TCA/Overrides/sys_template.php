<?php

declare(strict_types=1);
defined('TYPO3') or die();

call_user_func(function () {
    /**
     * Extension key
     */
    $extensionKey = 'af6bus';

    /**
     * Add default TypoScript (constants and setup)
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Site Package'
    );
});
