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
    

    Route::get('/review/{event}/{contact:uuid}', [ReviewController::class, 'start'])->name('review.start');
    Route::view('/review/ty', 'base::review.ty')->name('review.ty');
    Route::post('/review/{event}/{contact:uuid}', [ReviewController::class, 'create']);
    Route::post('/review/{event}/{contact:uuid}/finish', [ReviewController::class, 'finish']);
});
