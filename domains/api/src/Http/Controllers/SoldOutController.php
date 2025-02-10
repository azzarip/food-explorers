<?php

namespace Domains\Api\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class SoldOutController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Offer $offer)
    {
        $event = $offer->event->loadData();

        return response()->json(['sold_out' => $event->isSoldOut]);
    }
}
