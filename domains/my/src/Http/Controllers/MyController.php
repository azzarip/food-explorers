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

        if ($contact->hasNotTag('Question - Event Types')) {
            $types = $contact->hasTags(['Food', 'Drinks', 'Adventures']);

            return view('my::questions.event-types', $types);
        }

        return view('my::homepage');
    }
}
