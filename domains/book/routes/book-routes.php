<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.book.url'),
    'middleware' => 'web',
], function () {
    Route::view('/', 'book::homepage');

});