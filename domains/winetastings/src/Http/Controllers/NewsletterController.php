<?php

namespace Domains\Winetastings\Http\Controllers;

use App\Models\Contact;
use App\Teavel\Goals\Forms\Wine\NewsletterForm;
use Azzarip\Teavel\Http\Requests\EmailRequest;

class NewsletterController
{
    public function __invoke(EmailRequest $request)
    {
        $data = $request->validated();

        $contact = Contact::fromData($data);

        if ($request->has('spirits')) {
            $contact->tag('Likes Spirits');
        }

        NewsletterForm::complete($contact);

        $contact->storeInSession();

        return redirect('/ty');
    }
}
