<?php 

namespace App\Actions\Event;

use App\Models\Event;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class CancelParticipation {

    public static function cancel(Contact $contact, Event $event)
    {
        $pivot = DB::table('contact_event')
        ->where('event_id', $event->id)
        ->where('contact_id', auth()->user()->id)
        ->first();


        $contact->events()->updateExistingPivot($event->id, [
            'deleted_at' => now(),
            'queue' => null,
        ]); 

        if($pivot->queue === null) {
            $new = DB::table('contact_event')
            ->where('event_id', $event->id)
            ->whereNull('deleted_at')
            ->whereNotNull('queue')
            ->orderBy('queue')
            ->first();
            if($new) {
                $event->contacts()->updateExistingPivot($new->contact_id, [
                    'queue' => null,
                ]); 
            }
        }

    }
}