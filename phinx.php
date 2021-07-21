<?php

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'getloan_C2C',
            'user' => 'getloan_C2C',
            'pass' => 'ÝÔïóÞÜMWAË^üæç=Y',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'getloan_C2C',
            'user' => 'getloan_C2C',
            'pass' => 'ÝÔïóÞÜMWAË^üæç=Y',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => 'localhost',
            'name' => 'test_getloan_C2C',
            'user' => 'getloan_C2C',
            'pass' => 'ÝÔïóÞÜMWAË^üæç=Y',
            'port' => '3306',
            'charset' => 'utf8',
        ]
    ],
    'version_order' => 'creation'
];
