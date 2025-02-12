<?php

namespace App\Listeners;

use App\Actions\Event\AddParticipant;
use App\Mail\EventJoinedMail;
use App\Models\Offer;
use App\Models\Contact;
use App\Models\Payment;
use Azzarip\Teavel\Jobs\CompleteForm;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Azzarip\Teavel\Events\StripeWebhookReceived;

class PaymentIntentSucceeded implements ShouldQueue
{

    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StripeWebhookReceived $event): void
    {
        $stripeEvent = $event->stripeEvent;

        if($stripeEvent->type == 'payment_intent.succeeded') {
            $payment = Payment::firstWhere([
                'payment_id' => $stripeEvent->data->object->id,
                'payment_secret' => $stripeEvent->data->object->client_secret,
            ]);
            
            $metadata = $stripeEvent->data->object->metadata;

            $offer = Offer::find($metadata->offer_id);
            $contact = Contact::find($metadata->contact_id);
            
            $payment->update([
                'order_id' => 0,
                'event_id' => $offer->event_id,
            ]);    


            AddParticipant::force($contact, $offer->event);

            CompleteForm::dispatch($contact, $offer->getCompletedGoal());

            EventJoinedMail::to($contact)
                ->event($offer->event)
                ->send();
        }
    }
}
