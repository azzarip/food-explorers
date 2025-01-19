<?php 

namespace App\Actions\Event;

use App\Models\Event;
use App\Models\Contact;

class CancelParticipation {

    public static function cancel(Contact $contact, Event $event)
    {
        $contact->events()->updateExistingPivot($event->id, ['deleted_at' => now()]);
    }
}