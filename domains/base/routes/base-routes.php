<?php

use Domains\Base\Http\Controllers\EventPageController;
use Domains\Base\Http\Controllers\MilanoController;
use Domains\Base\Http\Controllers\PetitParisInterest;
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

    Route::view('/paris', 'base::lp.adventures.paris');
    Route::post('/paris', PetitParisInterest::class);
    Route::view('/ty/paris', 'base::lp.adventures.ty_paris');
    Route::view('/ty/paris/final', 'base::lp.adventures.ty_final');
    Route::view('/address/paris', 'base::lp.adventures.address');


    Route::get('/review/{event}/{contact:uuid}', [ReviewController::class, 'start'])->name('review.start');
    Route::view('/review/ty', 'base::review.ty')->name('review.ty');
    Route::post('/review/{event}/{contact:uuid}', [ReviewController::class, 'create']);
    Route::post('/review/{event}/{contact:uuid}/finish', [ReviewController::class, 'finish']);

});
