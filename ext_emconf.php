<?php

declare(strict_types=1);

/** @var string $_EXTKEY */
$_EXTKEY = 'rms_ai_search';

$EM_CONF[$_EXTKEY] = [
    'title' => 'RMS AI Search',
    'description' => 'AI Search extension for TYPO3 - connect your TYPO3 to https://chat.rm-solutions.de/',
    'version' => '1.1.0',
    'category' => 'plugin',
    'author' => 'Michael Kettel',
    'author_company' => 'RMS Stuttgart',
    'author_email' => 'info@rms-stuttgart.de',
    'state' => 'stable',
    'constraints' => [
        'depends' => [],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Rms\\RmsAiSearch\\' => 'Classes',
        ],
    ],
];
