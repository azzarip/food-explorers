<?php

namespace Domains\Base\Http\Controllers;

use App\Models\Event;
use App\Models\Review;
use App\Models\Contact;
use Illuminate\Http\Request;

class ReviewController
{
    public function start(Request $request, Event $event, Contact $contact) {

        if($event->scheduled_at->isFuture()) {
            abort(404);
        }

        if(! $contact->isGoingTo($event)) {
            abort(404);
        }
       
        $review = Review::where([
            'contact_id' => $contact->id, 
            'event_id' => $event->id,
        ])->first();
        
        if(empty($review)){
            return view('base::review.start', [
                'contact' => $contact,
                'event' => $event,
            ]);
        }
        
        if($review->data) {
            return to_route('review.ty');
        }

        return view('base::review.menu', [
            'contact' => $contact,
            'event' => $event,
        ]);
    }

    public function create(Request $request, Event $event, Contact $contact) {
        if($event->scheduled_at->isFuture()) {
            abort(404);
        }

        if(! $contact->isGoingTo($event)) {
            abort(404);
        }

       $rating = $request->validate([ 
            'rating' => 'required|integer|between:0,10',  
        ])['rating'];

        $review = Review::firstOrCreate([
            'contact_id' => $contact->id,
            'event_id' => $event->id
        ],   ['rating' => $rating]  
            );
        
        return to_route('review.start', [
            'contact' => $contact,
            'event' => $event,
        ]);
    }


      public function finish(Request $request, Event $event, Contact $contact) {

        if($event->scheduled_at->isFuture()) {
            abort(404);
        }

        if(! $contact->isGoingTo($event)) {
            abort(404);
        }
       
        $review = Review::where([
            'contact_id' => $contact->id, 
            'event_id' => $event->id,
        ])->first();

        if(empty($review)) {
            return to_route('review.start', [
                'event' => $event,
                'contact' => $contact
            ]);
        }

        $data = array_filter($request->only('positive', 'negative', 'variety', 'service', 'menu'));

        $review->update(['data' => $data]);

        return to_route('review.ty');
    }
}
