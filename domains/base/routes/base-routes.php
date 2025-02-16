<?php

use Domains\Base\Http\Controllers\EventPageController;
use Domains\Base\Http\Controllers\MilanoController;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/en', 'base::homepage');
    Route::view('/', 'base::homepage');
    //Route::get('/', fn (): string => 'Website under construction');


    Route::get('/event/{eventPage}', EventPageController::class)->name('eventPage');

    Route::view('/milano', 'base::milano');
    Route::view('/milano-final', 'base::milano-final');
    Route::post('/milano', MilanoController::class);
    Route::view('/ty/milano', 'base::milano-ty');
    Route::view('/yu-an-omakase', 'closed');
    Route::view('/rum-tasting', 'events.rumtasting');

    Route::view('/explore-malaysia', 'events.explore-malaysia');

    Route::view('/explore-malaysia/m', 'events.explore-malaysia-meetup');
});
