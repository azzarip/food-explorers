<?php

namespace Domains\Base\Http\Controllers;

use App\Models\EventPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

        if (auth()->check()) {
            $pivot = DB::table('contact_event')
                ->where('event_id', $event->id)
                ->where('contact_id', auth()->user()->id)
                ->whereNull('deleted_at')
                ->first();
        } else {
            Session::put('url.intended', $request->fullUrl());
        }

        return view('base::eventPage', [
            'eventPage' => $eventPage,
            'event' => $event,
            'location' => $location,
            'currentParticipants' => $currentParticipants,
            'participants' => $participants,
            'userParticipation' => $pivot ?? null,
        ]);
    }
}
