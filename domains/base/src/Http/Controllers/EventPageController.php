<?php

namespace Domains\Base\Http\Controllers;

use App\Models\EventPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventPageController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, EventPage $eventPage)
    {
        $event = $eventPage->event;
        $location = $event->location;
        $currentParticipants = $event->participants()->count();

        Session::put('url.intended', $request->fullUrl());

        return view('base::eventPage', [
            'eventPage' => $eventPage,
            'event' => $event,
            'location' => $location,
            'currentParticipants' => $currentParticipants,
        ]);
    }
}
