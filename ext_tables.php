<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}


call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'WapplerSystems.Ncaext',
            'User',
            'Demo Ausgabe'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Ncaext');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_ncaext_domain_model_profile', 'EXT:ncaext/Resources/Private/Language/locallang_csh_tx_ncaext_domain_model_profile.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_ncaext_domain_model_profile');

    },
    $_EXTKEY
);
