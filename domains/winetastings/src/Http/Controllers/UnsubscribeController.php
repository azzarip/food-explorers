<?php

namespace Domains\Winetastings\Http\Controllers;

use App\Models\Contact;
use App\Models\User;
use Azzarip\Teavel\Notifications\TelegramNotification;
use Illuminate\Http\Request;

class UnsubscribeController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $uuid = $request->query('key');

        if ($uuid) {
            $contact = Contact::findUuid($uuid);

            if (empty($contact)) {
                return redirect('/unsubscribe/ty');
            }

            $contact->tag('Stopped Wine Newsletter');
            $contact->detag('Wine Newsletter');
            User::first()->notify(new TelegramNotification('🍷 Cancelled', $contact));
        }

        return redirect('/unsubscribe/ty');

    }
}
