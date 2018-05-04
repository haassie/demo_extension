<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Haassie.DemoExtension',
    'Pi1',
    [
        'Demo' => 'demo',
    ],
    // non-cacheable actions
    [
    ]
);

//
//$metaTagManagerRegistry = \TYPO3\CMS\Core\MetaTag\MetaTagManagerRegistry::getInstance();
//$metaTagManagerRegistry->registerManager(
//    'richard',
//    \Haassie\DemoExtension\MetaTag\RichardMetaTagManager::class
//);
