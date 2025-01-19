<?php

namespace Domains\Base\Http\Controllers;

use Illuminate\Http\Request;

class EventPageController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'paco';
    }
}
