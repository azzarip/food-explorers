<?php

use App\Http\Controllers\RegisterController;
use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/profile/complete', 'auth.simple-register')->name('simple-register');
    Route::view('/login','auth.login')->name('login');
    Route::middleware('throttle:5')->post('/register', RegisterController::class);
    Route::view('/password/request', 'auth.password-request')->name('password.request');
    Route::view('/password/success', 'auth.password-success')->name('password.success');
    Route::view('/password/reset', 'auth.password-reset')->name('password.reset');
});

Route::get('telegram-test', function () {
    App\Models\User::first()->notify(new TelegramNotification('Test'));

    return 'Message Queued, if not working check the queue.';
});
