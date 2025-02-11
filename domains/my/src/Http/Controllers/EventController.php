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
        $events = Event::next()->get();
        return view('my::events', [
            'events' => $events,
            'contact' => Auth::user(),
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
