<?php 

namespace App\Actions\Event;

use App\Models\Event;
use App\Participation;
use Azzarip\Teavel\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\Exceptions\EventExpiredException;

class AddForceParticipant {

    public static function force(Contact $contact, Event $event)
    {
        if($event->scheduled_at->isPast())    {
            throw new EventExpiredException('The Event is Expired');
        }

        $pivot = DB::table('contact_event')
        ->where('contact_id', $contact->id)
        ->where('event_id', $event->id)
        ->first();

        if(empty($pivot)) {
            $contact->events()->attach($event->id);
        }

        return true;
    }
}