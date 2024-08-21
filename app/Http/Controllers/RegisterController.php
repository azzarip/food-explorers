<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Azzarip\Teavel\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Azzarip\Teavel\Exceptions\RegistrationException;
use Azzarip\Teavel\Http\Requests\FullRegistrationRequest;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FullRegistrationRequest $request)
    {
        $data = $request->validated();
        $data['marketing'] = true;

        try {
        $contact = Contact::register($data);
        } catch (RegistrationException $e)
        {
            return redirect(route('login'))
                ->withInput($request->only('email'))
                ->withErrors(['user' => 'User already registered. Please login or reset the password.']);
        }

        Auth::login($contact, true);
        return redirect(route('my'));
    }
}
