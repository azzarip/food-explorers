<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.my.url'),
    'middleware' => 'web',
],function () {

    Route::view('/', 'my::homepage');

});
