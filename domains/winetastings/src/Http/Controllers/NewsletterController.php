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

        NewsletterForm::dispatchAfterResponse($contact);

        return redirect('/ty');
    }
}
