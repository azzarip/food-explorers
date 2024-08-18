<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/', 'base::homepage');
    Route::middleware(['guest'])->group(function () {
        Route::view('/login', 'base::login')->name('login');
        Route::middleware(['throttle:6'])->post('/login', LoginController::class);
        Route::view('/pwd-reset', 'base::pwd-reset-success');
        Route::post('/pwd-reset', [PasswordController::class, 'send']);
        Route::view('/pwd-modify', 'base::pwd-modify');

    });
});
