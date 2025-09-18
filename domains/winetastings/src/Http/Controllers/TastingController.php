<?php

namespace Domains\Winetastings\Http\Controllers;

use App\Wine\Loader;
use App\Models\Wine\Tasting;
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

    public function show(Request $request, Tasting $tasting)
    {
        $text = $tasting->description?->text;
        $description = $text ? \Illuminate\Support\Str::markdown(preg_replace("/\r?\n/", "  \n", $text)) : null;
        return view('winetastings::tasting', [
            'tasting' => $tasting,
            'description' => $description,
        ]);
    }
}
