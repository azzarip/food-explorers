<?php

namespace Domains\Base\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Azzarip\Teavel\Http\Requests\FullContactRequest;

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
        
        return redirect('/ty/milano');
    }
}
