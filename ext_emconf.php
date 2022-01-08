<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Faceted Search (ke_search)',
    'description' => 'This extension provides integration with "Faceted Search" (ke_search) to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Sven Petersen',
    'author_email' => 'sven@hardanders.de',
    'category' => 'fe',
    'internal' => '',
    'version' => '1.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-11.5.99',
            'frontend' => '10.4.0-11.5.99',
            'ke_search' => '4.2.0-4.2.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '2.6.0-3.0.99'
        ]
    ],
];
