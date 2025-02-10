<?php 

namespace App\Actions\Stripe;

use App\Models\Offer;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;
use Azzarip\Teavel\Actions\Stripe\CreateStripeContact;

class OfferPayment {

    public static function get(Offer $offer) {
        $contact = self::getContact();

        if(empty($contact->stripe_id)) {
            CreateStripeContact::create($contact);
        }

        $payment = Payment::firstWhere([
            'contact_id' => $contact->id,
            'offer_id' => $offer->id,
        ]);

        if($payment) {
            return $payment;
        }

        $stripe = new \Stripe\StripeClient(config('services.stripe.secret'));

        $response = $stripe->paymentIntents->create([
            'amount' => $offer->price->int,
            'currency' => 'chf',          
            'customer' => $contact->stripe_id,
            "automatic_payment_methods" => ["enabled" => true],
            'description' => $offer->full_title,
            'metadata' => [
                'offer_id' => $offer->id,
                'contact_id' => $contact->id,
            ]
        ]);

        return Payment::create([
            'contact_id' => $contact->id,
            'offer_id' => $offer->id,
            'payment_id' => $response->id,
            'payment_secret'=> $response->client_secret,
            'amount' => $response->amount,
        ]);
    }

    protected static function getContact() {
        if (Auth::guest()) {
            throw new AuthenticationException();
        } 
        return Auth::user();
    }

}