<?php

namespace Domains\My\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contact = Auth::user();

        $options = array_map(fn ($value) => (bool) $value, $request->only('Food', 'Drinks', 'Adventures'));

        foreach ($options as $tag => $flag) {
            if ($flag) {
                $contact->tag($tag);
            } else {
                $contact->detag($tag);
            }
        }

        $contact->tag('Question - Event Types');

        return redirect()->back()->with('saved', true);
    }
}
