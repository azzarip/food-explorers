<?php

use Illuminate\Support\Facades\Route;



Route::group([
    'domain' => config('domains.my.url'),
    'middleware' => ['web', 'auth'],
],function () {

    Route::view('/', 'my::homepage');
    Route::view('/events', 'my::events');

});

Route::get('/login', function () {
    $c = \App\Models\Contact::findEmail('paco@ricci.it');
    \Illuminate\Support\Facades\Auth::login($c, true);

    return redirect('/');
})->middleware('web')->name('login');
