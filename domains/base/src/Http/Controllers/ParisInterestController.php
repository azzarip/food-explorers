<?php

namespace Domains\Base\Http\Controllers;

use App\Models\Contact;
use App\Teavel\Goals\Forms\ParisInterestForm;
use Azzarip\Teavel\Http\Requests\FullContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ParisInterestController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FullContactRequest $request)
    {
        $data = $request->validated();

        $contact = Contact::fromData($data);
        $contact->allowMarketing();

        $contact->completeForm(ParisInterestForm::class);

        Session::put('contact', $contact->id);

        if ($contact->hasAddress) {
            return redirect('/ty/paris/final');
        }

        return redirect('/ty/paris');
    }
}
