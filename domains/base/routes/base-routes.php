<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

Route::group([
    'domain' => config('domains.base.url'),
    'middleware' => 'web'
], function () {
    Route::view('/en', 'base::homepage');
    Route::get('/', fn () => 'Website under construction');


    Route::get('/start', function () {
        $directory = storage_path('to_delete');
        File::makeDirectory($directory, 0755, true);

        return 'ok';
    });

    Route::get('/stop', function () {
        $directory = storage_path('to_delete');
        File::deleteDirectory($directory, 0755);
    });
    
    Route::get('/yu-an-omakase', function () {
        $directory = storage_path('to_delete');

        if (!File::exists($directory)) {
            return redirect('/closed');
        }
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
