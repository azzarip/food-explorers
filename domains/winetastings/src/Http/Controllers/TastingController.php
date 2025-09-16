<?php

namespace Domains\Winetastings\Http\Controllers;

use App\Wine\Loader;
use Illuminate\Http\Request;

class TastingController
{
    public function index(Request $request)
    {
        $loader = Loader::nextYear();

        $dates = $loader->getDays();
    
        $tastingDates = $dates
            ->pluck('date')
            ->map(fn ($d) => $d->toDateString())
            ->unique()
            ->values()
            ->all();
        
        return view('winetastings::calendar', [
            'dates' => $dates,
            'tastingDates' => $tastingDates,
        ]);
    }
}
