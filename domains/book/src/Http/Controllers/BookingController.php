<?php

namespace Domains\Book\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Azzarip\Teavel\Actions\Stripe\CreateStripeContact;

class BookingController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Offer $offer)
    {
        $event = $offer->event;
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

        $contact = Auth::user();

        if($contact->isGoingTo($event)) {
            return view('book::pages.success');
        }

        ($offer->getInterestedGoal())::startSequence($contact);

        if($event->isSoldOut) {
            return view('book::pages.sold-out');
        }

        if(empty($contact->stripe_id)) {
            CreateStripeContact::create($contact);
        }

        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

        $response = $stripe->paymentIntents->create([
            'amount' => $offer->price->int,
            'currency' => 'chf',          
            'customer' => $contact->stripe_id,
            "automatic_payment_methods" => ["enabled" => true],
            'description' => $offer->title . ' Event Ticket ' . $event->scheduled_at->format('d/m/Y'),
            'metadata' => [
                'slug' => $offer->slug,
                'contact_id' => $contact->id,
            ]
        ]);


        return view('book::pages.payment', [
            'clientSecret' => $response->client_secret,
            'return_url' => $request->url() . '/return',
        ]);



    }
}
