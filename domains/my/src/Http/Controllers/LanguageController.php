<?php

namespace Domains\My\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LanguageController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contact = Auth::user();
        $languages = array_keys(array_filter($request->only('de', 'en')));

        if (empty($languages)) {
            throw ValidationException::withMessages(['invalid_language' => trans('Please select a language')]);
        }

        foreach($languages as $language) {
            $contact->addLocale($language);
        }

        return to_route('my');
    }
}
