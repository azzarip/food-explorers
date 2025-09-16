<?php

namespace Domains\Winetastings\Http\Controllers;

use App\Mail\WineCompass;
use App\Models\Contact;
use App\Wine\Loader;
use Illuminate\Http\Request;

class ShowEmailController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $loader = Loader::nextWeek();

        $contact = Contact::make([
            'first_name' => 'Marco',
            'email' => 'preview@example.com',
            'uuid' => 'not-a-real-uuid',
        ]);

        return new WineCompass(
            loader: $loader,
            contact: $contact
        );
    }
}
