<?php

return [

    'base' => [
        'url' => 'www.' . env('DOMAIN_BASE'),
        'name' => 'Food Explorers',
    ],

    'admin' => [
        'url' => 'admin.' . env('DOMAIN_BASE'),
        'name' => 'Admin - Food Explorers',
    ],

    'my' => [
        'url' => 'my.' . env('DOMAIN_BASE'),
        'name' => 'My - Food Explorers',
    ],
    
    'book' => [
        'url' => 'book.' . env('DOMAIN_BASE'),
        'name' => 'Book - Food Explorers',
    ],
        
    'api' => [
        'url' => 'api.foodexplorers.' . env('TLD'),
        'name' => 'Api - Food Explorers',
    ],

    'winetastings' => [
        'url' => 'winetastingszurich.' . env('TLD'),
        'name' => 'Wine Tastings Zurich'
    ]
];
