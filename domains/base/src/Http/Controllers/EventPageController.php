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
        $participants = $event->participants;
        $currentParticipants = $participants->count();

        if(auth()->check()) {
            $currentUser = auth()->user();
            $isUserParticipating = $participants->contains(function ($participant) use ($currentUser) {
                return $participant->id === $currentUser->id; // Checking by ID or another unique identifier
            });
            
        } else {
            Session::put('url.intended', $request->fullUrl());
        }



        return view('base::eventPage', [
            'eventPage' => $eventPage,
            'event' => $event,
            'location' => $location,
            'currentParticipants' => $currentParticipants,
            'participants' => $participants,
            'isUserParticipating' => $isUserParticipating,
        ]);
    }
}
