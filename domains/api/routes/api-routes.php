<?php

use Illuminate\Support\Facades\Route;
use Domains\Api\Http\Controllers\SoldOutController;
use Azzarip\Teavel\Http\Controllers\Api\UpController;
use Azzarip\Teavel\Http\Middleware\AuthorizeApi;

Route::group([
    'domain' => config('domains.api.url'),
    'middleware' => 'api',
    'prefix' => 'v1',
], function () {
    Route::get('/offer/{offer}/soldout', SoldOutController::class);
    
    Route::middleware(AuthorizeApi::class)->group(function () {
        Route::get('/up', UpController::class);
    });
});