<?php

namespace App\Filament\Pages;

use Azzarip\Utilities\Filament\Widgets\AdminButton;
use Filament\Pages\Dashboard as Page;

class MainMenu extends Page
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationLabel = 'Main Menu';

    public function getHeaderWidgets(): array
    {
        return [
            AdminButton::make([
                'path' => '/teavel',
                'name' => 'Teavel',
                'primary' => '#6950FF',
                'icon' => 'heroicon-o-user-group',
            ]),
            AdminButton::make([
                'path' => '/events',
                'name' => 'Events',
                'primary' => '#b45309',
                'icon' => 'heroicon-o-calendar-days',
            ]),
            AdminButton::make([
                'path' => '/store',
                'name' => 'Store',
                'primary' => '#166534',
                'icon' => 'heroicon-o-currency-dollar',
            ]),
        ];
    }
}
