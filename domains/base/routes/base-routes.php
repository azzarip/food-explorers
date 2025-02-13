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

    Route::view('/explore-malaysia', 'events.exploring-malaysia');

    Route::get('/explore-malaysia/m', function () {
        if(\Carbon\Carbon::parse('16 February 2025 15:00')->isPast()) {
            return view('events.explore-malaysia-meetup');
        }
        return view('events.exploring-malaysia-milano');
    });
});
