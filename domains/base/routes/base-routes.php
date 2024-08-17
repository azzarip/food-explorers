<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/', 'base::homepage');
    Route::middleware(['guest'])->group(function () {
        Route::view('/login', 'base::login')->name('login');
        Route::middleware(['throttle:6'])->post('/login', LoginController::class);
    });
});
