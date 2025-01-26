<?php

namespace Domains\Book\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BookingController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Offer $offer)
    {
        $event = $offer->getEvent();
        $event->loadData();

        View::share([
            'event' => $event,
            'offer' => $offer,
        ]);

        if($event->scheduled_at->isPast()) {
            return view('book::pages.expired');
        }

        if(Auth::guest()) {
            return view('book::pages.auth');
        }

        if($event->available == 0) {
            return view('book::pages.sold-out');
        }



    }
}
