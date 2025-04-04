<?php

namespace App\Http\Controllers;

use App\Actions\Event\AddParticipation;
use App\Actions\Event\CancelParticipation;
use App\Models\Event;
use Illuminate\Http\Request;

class ParticipationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function delete(Request $request, Event $event)
    {
        CancelParticipation::cancel(auth()->user(), $event);

        return redirect()->back();
    }

    public function store(Request $request, Event $event)
    {
        AddParticipation::add(auth()->user(), $event);

        return redirect()->back();
    }
}
