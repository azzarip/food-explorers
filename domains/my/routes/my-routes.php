<?php

use Illuminate\Support\Facades\Route;
use Domains\My\Http\Controllers\MyController;
use Domains\My\Http\Controllers\LanguageController;



Route::group([
    'domain' => config('domains.my.url'),
    'middleware' => ['web', 'auth'],
],function () {

    Route::get('/', MyController::class)->name('my');
    Route::view('/events', 'my::events');
    Route::view('/options', 'my::options');


    Route::post('/set-language', LanguageController::class)->name('set-language')->middleware('auth');
});
