<?php

use Illuminate\Support\Facades\Route;
use Azzarip\Teavel\Http\Middleware\IntendedRedirect;
use Domains\Book\Http\Controllers\BookingController;

Route::group([
    'domain' => config('domains.book.url'),
    'middleware' => 'web',
], function () {
    Route::view('/', 'book::homepage');

    Route::middleware(IntendedRedirect::class)->group(function () {
        
       Route::get('/{offer}', BookingController::class);
       //Route::view('/rum-tasting', 'book::rum-tasting');
    });
});