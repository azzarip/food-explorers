<?php

namespace Domains\Base\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Teavel\Goals\Forms\InterestedMilano;
use Azzarip\Teavel\Http\Requests\FullContactRequest;

class InterestedMilanoController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FullContactRequest $request)
    {
        $data = $request->validated();

        $contact = Contact::fromData($data);

        InterestedMilano::complete($contact);
        
        return redirect('/milano/ty');
    }
}
