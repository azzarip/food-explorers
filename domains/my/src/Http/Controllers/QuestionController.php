<?php

namespace Domains\My\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class QuestionController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $contact = Auth::user();
      
        $options = array_keys(array_filter(array_map(function($value) {
            return (bool) (int) $value;
        }, $request->only('restaurant', 'bar'))));
        
        
        if ( ! array_filter($options)) {
            throw ValidationException::withMessages(['invalid_selection' => trans('Please choose at least one option')]);
        }

        $contact->tag('question.service');
        if (in_array('bar', $options)) {
            $contact->tag('Spirit Sailor');
        } 

        if (in_array('restaurant', $options)) {
            $contact->tag('Food Explorer');
        } 

        return to_route('my');
    }
}
