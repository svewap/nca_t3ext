<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'WapplerSystems.Ncaext',
            'User',
            [
                'Profile' => 'list, show, create, edit, new, update, delete'
            ],
            // non-cacheable actions
            [
                'Profile' => 'list, show, create, edit, new, update, delete'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					user {
						icon = EXT:ncaext/Resources/Public/Icons/user_plugin_user.svg
						title = LLL:EXT:ncaext/Resources/Private/Language/locallang_db.xlf:tx_ncaext_domain_model_user
						description = LLL:EXT:ncaext/Resources/Private/Language/locallang_db.xlf:tx_ncaext_domain_model_user.description
						tt_content_defValues {
							CType = list
							list_type = ncaext_user
						}
					}
				}
				show = *
			}
	   }'
        );
    },
    $_EXTKEY
);