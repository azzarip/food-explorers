<?php 

namespace App\Actions\Event;

use App\Models\Event;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class AddParticipation {

    public static function add(Contact $contact, Event $event)
    {
        $pivot = DB::table('contact_event')
        ->where('contact_id', $contact->id)
        ->where('event_id', $event->id)
        ->first();

        $participants = $event->participants()->count();

        if(! $pivot) {
            if($participants < $event->capacity) {
                $contact->events()->attach($event->id);
            } else {
                $queue = DB::table('contact_event')
                ->where('event_id', $event->id)
                ->whereNull('deleted_at')
                ->whereNotNull('queue')
                ->orderByDesc('queue')
                ->first();
                if($queue) {
                    $contact->events()->attach($event->id, ['queue' => $queue->queue++]);
                } else {
                    $contact->events()->attach($event->id, ['queue' => 1]);
                }
            }
            return redirect()->back();
        }
        
        if ($pivot->deleted_at !== null) {
            if($participants < $event->capacity) {
                $contact->events()->updateExistingPivot($event->id, ['deleted_at' => null]);
            } else {
                $queue = DB::table('contact_event')
                ->where('event_id', $event->id)
                ->whereNull('deleted_at')
                ->whereNotNull('queue')
                ->orderByDesc('queue')
                ->first();
                if($queue) {
                    $contact->events()->updateExistingPivot($event->id, [
                        'deleted_at' => null,
                        'queue' => $queue->queue++,
                    ]);
                } else {
                    $contact->events()->updateExistingPivot($event->id, [
                        'deleted_at' => null,
                        'queue' => 1,
                    ]);
                }
            }
        }

        return redirect()->back();
    }
}