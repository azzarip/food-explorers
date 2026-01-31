<?php

namespace Domains\Base\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Azzarip\Teavel\Http\Requests\FullContactRequest;
use Azzarip\Teavel\Notifications\TelegramNotification;

class MarvelousMilanoController
{
    public function __invoke(FullContactRequest $request)
    {
        $data = $request->validated();

        $contact = Contact::fromData($data);

        $contact->tag('MM26 Interested');
        User::first()->notify(new TelegramNotification('Marvelous Milano', $contact));

        return redirect('/marvelous-milano/ty');
    }
}
