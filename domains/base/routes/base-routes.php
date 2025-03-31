<?php

use Domains\Base\Http\Controllers\EventPageController;
use Domains\Base\Http\Controllers\MilanoController;
use Domains\Base\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/en', 'base::homepage');
    Route::view('/', 'base::homepage');

    Route::get('/event/{eventPage}', EventPageController::class)->name('eventPage');

    Route::view('/milano', 'base::milano');
    Route::view('/milano-final', 'base::milano-final');
    Route::view('/petit-paris', 'base::lp.adventures.petit-paris');
    Route::post('/milano', MilanoController::class);
    Route::view('/ty/milano', 'base::milano-ty');
    Route::view('/yu-an-omakase', 'closed');
    Route::view('/rum-expedition', 'events.rumtasting');

    Route::view('/explore-malaysia', 'events.explore-malaysia');
    Route::view('/goodbye-dapur', 'events.goodbye-dapur');

    Route::view('/explore-malaysia/m', 'events.explore-malaysia-meetup');


    Route::get('/review/{event}/{contact:uuid}', [ReviewController::class, 'start'])->name('review.start');
    Route::view('/review/ty', 'base::review.ty')->name('review.ty');
    Route::post('/review/{event}/{contact:uuid}', [ReviewController::class, 'create']);
    Route::post('/review/{event}/{contact:uuid}/finish', [ReviewController::class, 'finish']);

});
