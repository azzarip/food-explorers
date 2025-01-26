<?php

use Azzarip\Teavel\Http\Middleware\IntendedRedirect;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.book.url'),
    'middleware' => 'web',
], function () {
    Route::view('/', 'book::homepage');

    Route::middleware(IntendedRedirect::class)->group(function () {
        
       Route::view('/rum-tasting', 'book::rum-tasting');
    });
});