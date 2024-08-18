<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function send(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $contact = Contact::findEmail($request['email']);

        dd($contact);



        return redirect('/pwd-reset-success');
    }
}
