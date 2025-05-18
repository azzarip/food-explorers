<?php

use App\Teavel\Goals\Forms\ParisInterestForm;
use Domains\Base\Http\Controllers\EventPageController;
use Domains\Base\Http\Controllers\MilanoController;
use Domains\Base\Http\Controllers\ParisInterestController;
use Domains\Base\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/en', 'base::homepage');
    Route::view('/', 'base::homepage');

    Route::get('/event/{eventPage}', EventPageController::class)->name('eventPage');

    Route::view('/petit-paris', 'base::lp.adventures.waiting');

    Route::view('/paris', 'closed');
    Route::post('/paris', ParisInterestController::class);
    Route::view('/ty/paris', 'base::lp.adventures.ty_paris');
    Route::view('/ty/paris/final', 'base::lp.adventures.ty_final');
    Route::view('/address/paris', 'base::lp.adventures.address');

    Route::view('/pizza-tasting', 'events.tromiro');

    Route::view('/i-tried-all-gelaterias-of-zurich', 'base::gelato.main');
    Route::view('/all-gelaterias-of-zurich', 'base::gelato.list');

    Route::get('/review/{event}/{contact:uuid}', [ReviewController::class, 'start'])->name('review.start');
    Route::view('/review/ty', 'base::review.ty')->name('review.ty');
    Route::post('/review/{event}/{contact:uuid}', [ReviewController::class, 'create']);
    Route::post('/review/{event}/{contact:uuid}/finish', [ReviewController::class, 'finish']);
});
