<?php

namespace Domains\My\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contact = Auth::user();

        if( ! $contact->has_locale) {
            return view('my::questions.choose-language');
        }
        
        return view('my::homepage');
    }
}
