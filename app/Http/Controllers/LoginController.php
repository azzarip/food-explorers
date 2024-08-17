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
        if ($contact && Hash::check($request['password'], $contact->password)) {
            Auth::login($contact, true);
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        return redirect('/');
    }
}
