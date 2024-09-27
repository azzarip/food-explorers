<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/en', 'base::homepage');
    Route::get('/', fn () => abort(404));


    Route::get('/yu-an-omakase', function () {
        $targetDateTime = Carbon::create(2024, 10, 04, 12, 00, 0);

        if(now()->isAfter($targetDateTime)) {
            return redirect('/closed');
        }

        return view('omakase');
    });

    
    Route::get('/twint', function () {
        $targetDateTime = Carbon::create(2024, 10, 04, 12, 00, 0);

        if(now()->isAfter($targetDateTime)) {
            return redirect('/closed');
        }

        return view('twint');
    });


    Route::view('closed', 'closed');
});
