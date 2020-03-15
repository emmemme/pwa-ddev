<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'pwa_site_package';

    /**
     * Default PageTS for PwaSitePackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'PWA site package'
    );
});
