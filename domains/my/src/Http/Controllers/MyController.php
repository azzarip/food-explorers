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

        if( ! $contact->has_set_locale) {
            return view('my::questions.locale');
        }
        return view('my::homepage');
    }
}
