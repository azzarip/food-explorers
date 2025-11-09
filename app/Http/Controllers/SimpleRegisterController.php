<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Azzarip\Teavel\Exceptions\RegistrationException;

class SimpleRegisterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $data['marketing'] = true;

        try {
            $contact = Contact::register($data);
        } catch (RegistrationException $e) {
            return redirect(route('login'))
                ->withInput($request->only('email'))
                ->withErrors(['user' => 'already_registered']);
        }


        Auth::login($contact, true);

        return redirect(route('my'));
    }
}
