<?php

namespace App\Mail;

use App\Models\Contact;
use App\Models\Event;
use Azzarip\Teavel\Mail\EmailContent;
use Azzarip\Teavel\Mail\TeavelMail;
use Illuminate\Support\Facades\Mail;

class EventJoinedMail
{
    protected $filename = 'EventJoinedMail';

    protected array $data = [];

    public function __construct(protected Contact $contact)
    {
        //
    }

    public static function to(Contact $contact)
    {
        return new static($contact);
    }

    public function event(Event $event)
    {
        $this->data['event'] = $event;

        return $this;
    }

    public function send()
    {
        $path = __DIR__."/../../content/emails/{$this->filename}.md";

        $content = EmailContent::fromFile($path)
            ->to($this->contact)
            ->with($this->data);

        Mail::send(new TeavelMail($content));
    }
}
