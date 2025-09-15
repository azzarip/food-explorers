<?php

namespace Domains\Winetastings\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Azzarip\Teavel\Notifications\TelegramNotification;

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
