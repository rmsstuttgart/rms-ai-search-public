<?php

declare(strict_types=1);

use Rmsstuttgart\RmsAiSearch\Controller\SearchController;

defined('TYPO3') || die();

(static function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'RmsAiSearch',
        'Search',
        [
            SearchController::class => 'search',
        ],
        // non-cacheable actions
        [
            SearchController::class => 'search',
        ]
    );
})();
