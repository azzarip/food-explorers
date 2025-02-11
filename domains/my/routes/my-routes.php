<?php

use App\Http\Controllers\ParticipationController;
use Domains\My\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Domains\My\Http\Controllers\MyController;
use Domains\My\Http\Controllers\QuestionController;
use Domains\My\Http\Controllers\SetLanguageController;
use Domains\My\Http\Controllers\SuggestController;

Route::group([
    'domain' => config('domains.my.url'),
    'middleware' => ['web', 'auth'],
],function () {

    Route::get('/', MyController::class)->name('my');
    
    Route::get('/events', [EventController::class, 'index']);
    Route::get('/event/{event}', [EventController::class, 'show']);
    Route::view('/events/past', 'my::past-events');
    
    Route::view('/suggest', 'my::suggest');
    Route::post('/suggest', SuggestController::class);


    Route::view('/options', 'my::options.index');
    Route::view('/options/password', 'my::options.password');
    Route::view('/options/language', 'my::options.language');

    Route::view('/achievements', 'my::achievements');
    Route::view('/achievements/instructions', 'my::achievement-instructions');

    Route::post('/set-language', SetLanguageController::class)->name('set-language')->middleware('auth');
    Route::post('/question/services', QuestionController::class);


    Route::delete('/event/{event}', [ParticipationController::class, 'delete'])->name('participation.cancel');
    Route::post('/event/{event}', [ParticipationController::class, 'store'])->name('participation.add');
});
