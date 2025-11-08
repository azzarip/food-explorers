<?php

use Domains\Base\Http\Controllers\EventPageController;
use Domains\Base\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web',
], function () {
    Route::view('/en', 'base::homepage');
    Route::view('/', 'base::homepage');

    Route::permanentRedirect('/world/bar', '/linktree/wa?choice=drinks&utm_source=whatsapp&utm_medium=group&utm_campaign=description&utm_content=ebe');
    Route::permanentRedirect('/world', '/linktree/wa?utm_source=whatsapp&utm_medium=group&utm_campaign=description&utm_content=fex');
    Route::view('/linktree/wa', 'base::linktree.wa');

    Route::get('/event/{eventPage}', EventPageController::class)->name('eventPage');

    Route::get('/review/{event}/{contact:uuid}', [ReviewController::class, 'start'])->name('review.start');
    Route::view('/review/ty', 'base::review.ty')->name('review.ty');
    Route::post('/review/{event}/{contact:uuid}', [ReviewController::class, 'create']);
    Route::post('/review/{event}/{contact:uuid}/finish', [ReviewController::class, 'finish']);


    Route::view('/emilia', 'closed');
    Route::view('/yu-an-omakase', 'events.omakase');
    

    Route::view('/settle/petit-paris', 'base::settle.index');
    Route::get('/settle/petit-paris/{settlement}', fn (\App\Models\Settlement $settlement) => view('base::settle.show', ['settlement' => $settlement]));
});
