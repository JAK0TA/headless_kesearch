<?php

defined('TYPO3') || die();

call_user_func(function () {
    // Default TypoScript for Headless Faceted Search (ke_search)
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'headless_kesearch',
        'Configuration/TypoScript',
        'Headless Faceted Search (ke_search)'
    );
});
