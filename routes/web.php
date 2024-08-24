<?php

use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');

    Route::middleware('throttle:5')->post('/register', RegisterController::class);
});

Route::get('test', function () {
    $d = new Azzarip\Teavel\Mail\Mailables\PasswordRegisterMail();
    dd($d->toContact(\App\Models\Contact::first()));
});
