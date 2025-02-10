<?php

namespace Domains\Book\Http\Controllers;

use App\Actions\Stripe\OfferPayment;
use App\Models\Offer;
use Azzarip\Teavel\Actions\Forms\InterestForm;
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
        $event = $offer->eventWithData;

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

        $contact = Auth::user();

        if($contact->isGoingTo($event)) {
            return view('book::pages.success');
        }

        InterestForm::achieve($offer->getInterestedGoal(), $offer->slug);

        if($event->isSoldOut) {
            return view('book::pages.sold-out');
        }

        $payment = OfferPayment::get($offer);

        return view('book::pages.payment', [
            'clientSecret' => $payment->payment_secret,
            'return_url' => $request->url() . '/return',
        ]);

    }
}
