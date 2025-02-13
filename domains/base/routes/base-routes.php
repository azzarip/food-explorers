<?php

use Domains\Base\Http\Controllers\EventPageController;
use Domains\Base\Http\Controllers\MilanoController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

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
    Route::get('/explore-malaysia-milano', function () {
        if(\Carbon\Carbon::parse('15 February 2025 17:00')->isPast()) {
            return redirect('/explore-malaysia');
        }
        return view('events.exploring-malaysia-milano');
    });
});
