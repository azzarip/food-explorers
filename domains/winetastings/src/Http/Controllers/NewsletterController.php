<?php

namespace Domains\Winetastings\Http\Controllers;

use App\Models\Contact;
use Azzarip\Teavel\Http\Requests\EmailRequest;
use App\Teavel\Goals\Forms\Wine\NewsletterForm;

class NewsletterController
{
    public function __invoke(EmailRequest $request) {
        $data = $request->validated();

        $contact = Contact::fromData($data);

        $contact->tag('Started Wine Newsletter');
        $contact->tag('Wine Newsletter');
        $contact->tag('Likes Wine');

        NewsletterForm::dispatchAfterResponse($contact);
        
        $contact->storeInSession();
        
        return redirect('/ty');
    }
}
