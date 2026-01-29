<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

ExtensionUtility::registerPlugin(
    'RmsAiSearch',
    'Search',
    'RMS AI Search',
    'rms_ai_search_icon_png'
);

// Define the new TCA field for aisearch_url_hash
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'aisearch_url_hash' => [
        'label' => 'LLL:EXT:rms_ai_search/Resources/Private/Language/locallang_db.xlf:tt_content.aisearch_url_hash',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
]);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'aisearch_api_host' => [
        'label' => 'LLL:EXT:rms_ai_search/Resources/Private/Language/locallang_db.xlf:tt_content.aisearch_api_host',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
]);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'aisearch_prompt_template' => [
        'label' => 'LLL:EXT:rms_ai_search/Resources/Private/Language/locallang_db.xlf:tt_content.aisearch_prompt_template',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
        ],
    ],
]);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'aisearch_list_all_sources' => [
        'label' => 'LLL:EXT:rms_ai_search/Resources/Private/Language/locallang_db.xlf:tt_content.aisearch_list_all_sources',
        'config' => [
            'type' => 'check',
            'default' => 0,
        ],
    ],
]);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
    'aisearch_autofocus_search_field' => [
        'label' => 'LLL:EXT:rms_ai_search/Resources/Private/Language/locallang_db.xlf:tt_content.aisearch_autofocus_search_field',
        'config' => [
            'type' => 'check',
            'default' => 1,
        ],
    ],
]);

// Add the plugin fields to the plugin's display
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;Configuration,aisearch_url_hash,aisearch_api_host,aisearch_prompt_template,aisearch_list_all_sources,aisearch_autofocus_search_field',
    'list',
    'after:subheader'
);

// Set preview renderer for the plugin
$GLOBALS['TCA']['tt_content']['types']['list']['previewRenderer']['rmsaisearch_search']
    = \Rmsstuttgart\RmsAiSearch\Preview\SearchPreviewRenderer::class;
