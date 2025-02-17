<?php

namespace Domains\My\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $nextEvents = Event::next()->get();
        $contact = Auth::user();

        $shownEvents = $nextEvents->filter(function ($event) use ($contact) {
            $status = $contact->isGoingTo($event);
            $event->status = $status ? 'going' : null;
            return $contact->isGoingTo($event) || $event->event_type == \App\EventType::Menu;
        });
        return view('my::events', [
            'events' => $shownEvents,
            'contact' => $contact,
        ]);
    }

    public function show(Request $request, Event $event) 
    {
        if($event->scheduled_at->endOfDay()->isPast()) {
            return abort(404);
        }
        
        return view('my::event', [
            'event' => $event,
            'contact' => Auth::user(),
        ]);    
    }
}
