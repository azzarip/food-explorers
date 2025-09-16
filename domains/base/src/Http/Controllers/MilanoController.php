<?php

namespace Domains\Base\Http\Controllers;

use App\Models\Contact;
use Azzarip\Teavel\Http\Requests\FullContactRequest;
use Illuminate\Http\Request;

class MilanoController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FullContactRequest $request)
    {
        $data = $request->validated();

        $contact = Contact::get($data);

        $contact->tag('Interested Milano Meraviglia');
        $contact->allowMarketing();

        return redirect('/ty/milano');
    }
}
