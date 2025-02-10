<?php

use Illuminate\Support\Facades\Route;
use Domains\Book\Http\Controllers\ReturnController;
use Azzarip\Teavel\Http\Middleware\IntendedRedirect;
use Domains\Book\Http\Controllers\BookingController;

Route::group([
    'domain' => config('domains.book.url'),
    'middleware' => 'web',
], function () {
    Route::view('/', 'book::homepage');

    Route::middleware(IntendedRedirect::class)->group(function () {
       Route::get('/{offer}', BookingController::class);
    });

    Route::get('/{offer}/return', ReturnController::class);

});