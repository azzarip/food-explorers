<?php

namespace Domains\Base\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Azzarip\Teavel\Http\Requests\FullContactRequest;
use App\Teavel\Goals\Forms\PetitParisInterest as FormsPetitParisInterest;

class PetitParisInterest
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FullContactRequest $request)
    {
        $data = $request->validated();

        $contact = Contact::fromData($data);
        $contact->allowMarketing();

        $contact->completeForm(FormsPetitParisInterest::class);
        
        Session::put('contact', $contact->id);
        
        return redirect('/ty/paris');
    }
}
