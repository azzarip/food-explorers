<?php

use Azzarip\Teavel\Http\Middleware\IntendedRedirect;
use Domains\Book\Http\Controllers\BookingController;
use Domains\Book\Http\Controllers\ReturnController;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.book.url'),
    'middleware' => 'web',
], function () {

    Route::middleware(IntendedRedirect::class)->group(function () {
        Route::get('/{offer}', BookingController::class);
    });

    Route::get('/{offer}/return', ReturnController::class);
    Route::view('/{offer}/success', 'book::pages.success');

});
