<?php

use Illuminate\Support\Facades\Route;



Route::group([
    'domain' => config('domains.my.url'),
    'middleware' => ['web', 'auth'],
],function () {

    Route::view('/', 'my::homepage')->name('my');
    Route::view('/events', 'my::events');

});
