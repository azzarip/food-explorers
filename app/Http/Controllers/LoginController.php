<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Azzarip\Teavel\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginRequest $request)
    {
        $request->validated();
        $contact = Contact::findEmail($request['email']);

        if(!$contact || !$contact->is_registered) {
            return back()->withErrors(['user' => 'User not registered']);
        }

        if (! Hash::check($request['password'], $contact->password)) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        $request->session()->regenerate();
        Auth::login($contact, true);

        if (session()->has('url.intended')) {
            return redirect(session('url.intended'));
        }
        return redirect('/');
    }
}
