<?php

namespace Domains\Winetastings\Http\Controllers;

use Carbon\Carbon;
use App\Models\Wine\Date;
use Illuminate\Http\Request;

class TastingController
{
    public function index(Request $request)
    {
        $dates = Date::with('tasting')
            ->upcomingNextDays(30)
            ->limit(100)
            ->get()
            ->groupBy(fn ($wineDate) => $wineDate->date->toDateString());

        $today = Carbon::today()->toDateString();
        $tomorrow = Carbon::tomorrow()->toDateString();
        
        $tastingDates = $dates->keys()->unique()->values()->toArray();

        return view('winetastings::calendar', [
            'dates' => $dates,
            'today' => $today,
            'tomorrow' => $tomorrow,
            'tastingDates' => $tastingDates,
        ]);
    }
}
