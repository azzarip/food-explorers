<?php

namespace App\Filament\Pages;

use Azzarip\Utilities\Filament\Widgets\AdminButton;
use Filament\Pages\Dashboard as Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public function getHeaderWidgets(): array
    {
        return [
            AdminButton::make([
                'path' => '/events',
                'name' => 'Events',
                'primary' => '#b45309',
                'icon' => 'heroicon-o-calendar-days',
            ]),
            AdminButton::make([
                'path' => '/offer',
                'name' => 'Offers',
                'primary' => '#166534',
                'icon' => 'heroicon-o-currency-dollar',
            ]),
        ];
    }
}
