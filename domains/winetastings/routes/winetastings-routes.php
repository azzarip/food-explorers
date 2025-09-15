<?php

use Illuminate\Support\Facades\Route;
use Domains\Winetastings\Http\Controllers\TastingController;
use Domains\Winetastings\Http\Controllers\NewsletterController;
use Domains\Winetastings\Http\Controllers\UnsubscribeController;

Route::group([
    'middleware' => 'web',
    'domain' => config('domains.winetastings.url'),
], function () {
    Route::view('/', 'winetastings::homepage');
    Route::get('/upcoming', [TastingController::class, 'index']);
    Route::view('/ty', 'winetastings::ty');

    Route::post('/', NewsletterController::class);

    Route::view('/unsubscribe', 'winetastings::unsubscribe')->name('wine.unsubscribe');
    Route::view('/unsubscribe/ty', 'winetastings::ty.unsubscribe');
    Route::post('/unsubscribe', UnsubscribeController::class);


    Route::permanentRedirect('/vv', '/?utm_source=vivino&utm_medium=profile');
});