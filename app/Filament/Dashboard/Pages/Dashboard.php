<?php

namespace App\Filament\Dashboard\Pages;

use Azzarip\Utilities\Filament\Widgets\AdminButton;
use Filament\Pages\Dashboard as Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';



    public function getHeaderWidgets(): array
    {
        return [
            AdminButton::make([
                'path' => '/meetups',
                'name' => 'Meetups',
                'primary' => '#ef4444',
                'icon' => 'heroicon-o-user-group'
            ]),
        ];
    }

}
