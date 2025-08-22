<?php

use Domains\Winetastings\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'web',
    'domain' => config('domains.winetastings.url'),
], function () {
    Route::view('/', 'winetastings::homepage');
    Route::view('/ty', 'winetastings::ty');
    
    Route::post('/', NewsletterController::class);
});