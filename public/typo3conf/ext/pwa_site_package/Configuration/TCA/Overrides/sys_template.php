<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'pwa_site_package';

    /**
     * Default TypoScript for PwaSitePackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'PWA site package'
    );
});
