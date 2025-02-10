<?php

use Domains\Api\Http\Controllers\SoldOutController;
use Illuminate\Support\Facades\Route;
use Domains\Api\Http\Controllers\StripeController;

Route::group([
    'domain' => config('domains.api.url'),
    'middleware' => 'api',
], function () {
    
    Route::get('/offer/{offer}/soldout', SoldOutController::class);
});