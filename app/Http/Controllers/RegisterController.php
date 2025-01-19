<?php

namespace App\Http\Controllers;

use Azzarip\Teavel\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
                ->withErrors(['user' => 'already_registered']);
        }

        Auth::login($contact, true);
        
        if(Session::has('url.intended')) {
            return redirect(Session::get('url.intended'));
        }
        
        return redirect(route('my'));
    }
}
