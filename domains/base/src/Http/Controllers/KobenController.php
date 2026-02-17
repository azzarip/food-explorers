<?php

namespace Domains\Base\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Azzarip\Teavel\Http\Requests\FullContactRequest;
use Azzarip\Teavel\Notifications\TelegramNotification;

class KobenController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(FullContactRequest $request)
    {
        $data = $request->validated();
        $contact = Contact::fromData($data);
        $contact->tag('Koben3 Interested');
        User::first()->notify(new TelegramNotification('Koben3', $contact));

        return redirect('/koben/ty');
    }
}
