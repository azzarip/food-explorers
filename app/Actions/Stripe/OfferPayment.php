<?php

namespace App\Actions\Stripe;

use App\Models\Offer;
use App\Models\Payment;
use Azzarip\Teavel\Actions\Stripe\CreateStripeContact;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use Stripe\StripeClient;

class OfferPayment
{
    public static function get(Offer $offer)
    {
        $contact = self::getContact();

        if (empty($contact->stripe_id)) {
            CreateStripeContact::create($contact);
        }

        $payment = Payment::where('contact_id', $contact->id)
            ->where('event_id', $offer->event_id)
            ->where('created_at', '>=', now()->subDays(7))
            ->whereNull('order_id')
            ->first();

        if ($payment) {
            return $payment;
        }

        $stripe = new StripeClient(config('services.stripe.secret'));

        $response = $stripe->paymentIntents->create([
            'amount' => $offer->price->int,
            'currency' => 'chf',
            'customer' => $contact->stripe_id,
            'automatic_payment_methods' => ['enabled' => true],
            'description' => $offer->full_title,
            'metadata' => [
                'offer_id' => $offer->id,
                'event_id' => $offer->event_id,
                'contact_id' => $contact->id,
                'offer_variation' => 0,
            ],
        ]);

        return Payment::create([
            'contact_id' => $contact->id,
            'event_id' => $offer->event_id,
            'payment_id' => $response->id,
            'payment_secret' => $response->client_secret,
            'amount' => $response->amount,
        ]);
    }

    protected static function getContact()
    {
        if (Auth::guest() && Auth::guard('soft')->guest()) {
            throw new AuthenticationException;
        }

        return Auth::user() ?? Auth::guard('soft')->user();
    }
}
