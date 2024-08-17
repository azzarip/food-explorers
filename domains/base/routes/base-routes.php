<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/', 'base::homepage');
    Route::view('/login', 'base::login');


});
