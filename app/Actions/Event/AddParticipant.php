<?php

namespace App\Actions\Event;

use App\Exceptions\EventExpiredException;
use App\Models\Event;
use Azzarip\Teavel\Models\Contact;
use Illuminate\Support\Facades\DB;

class AddParticipant
{
    public static function force(Contact $contact, Event $event)
    {
        if ($event->scheduled_at->isPast()) {
            throw new EventExpiredException('The Event is Expired');
        }

        $pivot = DB::table('contact_event')
            ->where('contact_id', $contact->id)
            ->where('event_id', $event->id)
            ->first();

        if (empty($pivot)) {
            $contact->events()->attach($event->id);
        }

        return true;
    }
}
