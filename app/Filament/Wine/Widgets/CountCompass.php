<?php

namespace App\Filament\Wine\Widgets;

use Azzarip\Teavel\Models\Tag;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CountCompass extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $subs = Tag::name('Wine Newsletter')->contacts()->count();
        return [
            Stat::make('Wine Compass Subscribers', $subs),
            
        ];
    }
}
