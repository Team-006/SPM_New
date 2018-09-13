<?php
return [
    //...
    'default' => env('DB_CONNECTION', 'mysql'),
    //...
    'connections' => [
        'mysql' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST', 'localhost'),
            'database'  => env('DB_DATABASE', 'homestead'),
            'username'  => env('DB_USERNAME', 'root'),
            'password'  => env('DB_PASSWORD', ' '),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'spm' => [
            'driver'    => 'mysql',
            'host'      => env('DB_TEST_HOST', 'localhost'),
            'database'  => env('DB_TEST_DATABASE', 'spm'),
            'username'  => env('DB_TEST_USERNAME', 'root'),
            'password'  => env('DB_TEST_PASSWORD', ' '),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
    //...
];