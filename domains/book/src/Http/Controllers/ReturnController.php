<?php

namespace Domains\Book\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class ReturnController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Offer $offer)
    {
        $redirect_status = $request->query('redirect_status');

        if(empty('redirect_status') === null) {
            return redirect($offer->url);
        }
    }
}
