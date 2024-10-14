<?php

namespace Domains\My\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SetLanguageController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contact = Auth::user();

        $languages = array_map(function($value) {
            return (bool) (int) $value;
        }, $request->only('de', 'en'));
        
        $selected = array_filter($languages);
        if ( ! $selected) {
            throw ValidationException::withMessages(['invalid_language' => trans('Please select a language')]);
        }

        $locale = (count($selected) == 1) ? array_key_first($selected) : app()->getLocale();
        $contact->setPreferredLocale($locale);

        foreach($languages as $lang => $value) {
            if($value) {
                $contact->addLanguage($lang);
            } else {
                $contact->removeLanguage($lang);
            }
        }

        return to_route('my');
    }
}
