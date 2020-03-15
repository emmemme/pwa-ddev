<?php

/**
 * Extension Manager/Repository config file for ext "pwa_site_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'PWA site package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '10.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'GammSystem\\PwaSitePackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Maurizio Morini',
    'author_email' => 'morini@gammsystem.com',
    'author_company' => 'Gamm System',
    'version' => '1.0.0',
];
