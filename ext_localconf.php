<?php

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Factories',
    'ExampleOutput',
    [
        \Passionweb\Factories\Controller\FactoryController::class => 'example'
    ],
    // non-cacheable actions
    [
        \Passionweb\Factories\Controller\FactoryController::class => 'example',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        exampleoutput {
                            iconIdentifier = factories-example
                            title = LLL:EXT:factories/Resources/Private/Language/locallang_db.xlf:plugin_factories_example.name
                            description = LLL:EXT:factories/Resources/Private/Language/locallang_db.xlf:plugin_factories_example.description
                            tt_content_defValues {
                                CType = list
                                list_type = factories_exampleoutput
                            }
                        }
                    }
                    show = *
                }
           }'
);
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

$iconRegistry->registerIcon(
    'factories-example',
    \TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,
    ['source' => 'EXT:factories/Resources/Public/Icons/Extension.png']
);
