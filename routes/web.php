<?php

use App\Http\Controllers\RegisterController;
use App\Notifications\TelegramNotification;
use Illuminate\Support\Facades\Route;
use NotificationChannels\Telegram\TelegramBase;

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

Route::get('/', function () {
    abort(404);
});

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::view('/profile/complete', 'auth.simple-register')->name('simple-register');

    Route::middleware('throttle:5')->post('/register', RegisterController::class);
});

Route::get('telegram-test', function () {
    App\Models\User::first()->notify(new TelegramNotification('Test'));
    return 'Ok!';
});