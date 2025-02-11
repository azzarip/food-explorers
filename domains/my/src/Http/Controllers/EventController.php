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
    public function __invoke(Request $request)
    {
        $events = Event::next()->get();
        return view('my::events', [
            'events' => $events,
            'contact' => Auth::user(),
        ]);
    }
}
