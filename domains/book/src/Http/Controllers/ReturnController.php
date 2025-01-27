<?php

namespace Domains\Book\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReturnController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Offer $offer)
    {
        $redirect_status = $request->query('redirect_status');

        if(Auth::guest()) {
            return redirect($offer->url);
        }

        if($redirect_status == 'failed') {
            return redirect($offer->url)->withErrors([
                'payment' => 'Payment failed. Please try again, or change payment method.',
            ])->withInput(['agb' => true]);
        }
        
        if($redirect_status == 'succeeded') {
            return view('book::pages.success', [
                'offer' => $offer,
                'event' => $offer->event->loadData()
            ]);
        }

        return redirect($offer->url);
    }
}
