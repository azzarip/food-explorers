<?php

use Illuminate\Support\Facades\Route;
use Domains\My\Http\Controllers\MyController;
use Domains\My\Http\Controllers\QuestionController;
use Domains\My\Http\Controllers\SetLanguageController;



Route::group([
    'domain' => config('domains.my.url'),
    'middleware' => ['web', 'auth'],
],function () {

    Route::get('/', MyController::class)->name('my');
    Route::view('/events', 'my::events');
    Route::view('/options', 'my::options.index');
    Route::view('/options/language', 'my::options.language');



    Route::post('/set-language', SetLanguageController::class)->name('set-language')->middleware('auth');
    Route::post('/question/services', QuestionController::class);
});
