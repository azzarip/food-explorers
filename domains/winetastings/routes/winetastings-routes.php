<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'web',
    'domain' => config('domains.winetastings.url'),
], function () {
    Route::view('/', 'winetastings::homepage');
});