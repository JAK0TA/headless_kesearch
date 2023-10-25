<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Faceted Search (ke_search)',
    'description' => 'This extension provides integration with "Faceted Search" (ke_search) to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Sven Petersen',
    'author_email' => 'sven@hardanders.de',
    'category' => 'fe',
    'internal' => '',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.5.99',
            'frontend' => '12.4.0-12.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
