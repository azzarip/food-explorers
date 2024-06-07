<?php

return [

    'base' => [
        'url' => env('DOMAIN_BASE'),
        'fonts' => [],
        'name' => 'Food Explorers',
    ],

    'admin' => [
        'url' => env('DOMAIN_ADMIN'),
        'fonts' => [],
        'name' => 'Admin - Food Explorers',
    ],

    'my' => [
        'url' => env('DOMAIN_MY', 'my.' . env('DOMAIN_BASE')),
        'fonts' => [],
        'name' => 'My - Food Explorers',
    ],
];
