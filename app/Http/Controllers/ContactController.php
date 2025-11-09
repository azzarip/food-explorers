<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Teavel\Goals\Forms\Registration;
use Azzarip\Teavel\Exceptions\RegistrationException;
use Azzarip\Teavel\Http\Requests\FullContactRequest;
use Azzarip\Teavel\Http\Requests\FullRegistrationRequest;
use Azzarip\Teavel\Jobs\CompleteForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FullContactRequest $request)
    {
        $data = $request->validated();
        $data['marketing'] = true;

        $contact = Contact::fromData($data);

        Auth::guard('soft')->login($contact);

        if (Session::has('url.intended')) {
            return redirect(Session::get('url.intended'));
        }

        return redirect(route('my'));
    }
}
