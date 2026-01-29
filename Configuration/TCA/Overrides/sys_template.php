<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addStaticFile(
    'rms_ai_search',
    'Configuration/TypoScript',
    'AI-Search'
);
