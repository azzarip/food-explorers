<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'web',
    'domain' => config('domains.zurichgems.url'),
], function () {
    Route::view('/', 'zurichgems::homepage');
    Route::view('/gelato', 'zurichgems::gelato.main')->name('gelato.main');
    Route::view('/gelato/reviews', 'zurichgems::gelato.list')->name('gelato.list');
    Route::view('/bars', 'zurichgems::bars');

});
