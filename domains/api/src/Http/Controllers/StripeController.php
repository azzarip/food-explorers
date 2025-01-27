<?php

namespace Domains\Api\Http\Controllers;

use Illuminate\Http\Request;

class StripeController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        \Illuminate\Support\Facades\Log::info('stripe received');
    }
}
