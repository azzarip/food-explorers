<?php

use Domains\Winetastings\Http\Controllers\NewsletterController;
use Domains\Winetastings\Http\Controllers\ShowEmailController;
use Domains\Winetastings\Http\Controllers\TastingController;
use Domains\Winetastings\Http\Controllers\UnsubscribeController;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'web',
    'domain' => config('domains.winetastings.url'),
], function () {
    Route::view('/', 'winetastings::homepage');
    Route::get('/calendar', [TastingController::class, 'index']);
    Route::get('/tasting/{tasting}', [TastingController::class, 'show']);
    
    Route::view('/ty', 'winetastings::ty');

    Route::post('/', NewsletterController::class);

    Route::view('/unsubscribe', 'winetastings::unsubscribe')->name('wine.unsubscribe');
    Route::view('/unsubscribe/ty', 'winetastings::ty.unsubscribe');
    Route::post('/unsubscribe', UnsubscribeController::class);

    Route::get('/email', ShowEmailController::class);

    Route::permanentRedirect('/vv', '/?utm_source=vivino&utm_medium=profile');
    Route::permanentRedirect('/upcoming', '/calendar');
});
