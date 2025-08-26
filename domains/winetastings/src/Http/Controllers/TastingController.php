<?php

namespace Domains\Winetastings\Http\Controllers;

use App\Models\Wine\Date;
use Illuminate\Http\Request;

class TastingController
{
    public function index(Request $request)
    {
        $dates = Date::with('event')
            ->upcomingNextDays(30)
            ->get();

        return view('winetastings::upcoming', [
            'dates' => $dates,
        ]);
    }
}
