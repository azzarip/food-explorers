<?php

use Illuminate\Support\Facades\Route;
use Domains\Winetastings\Http\Controllers\TastingController;
use Domains\Winetastings\Http\Controllers\NewsletterController;

Route::group([
    'middleware' => 'web',
    'domain' => config('domains.winetastings.url'),
], function () {
    Route::view('/', 'winetastings::homepage');
    Route::get('/upcoming', [TastingController::class, 'index']);
    Route::view('/ty', 'winetastings::ty');

    Route::post('/', NewsletterController::class);

    Route::permanentRedirect('/vv', '/?utm_source=vivino&utm_medium=profile');
});