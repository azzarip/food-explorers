<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordController;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/', 'base::homepage');

});
