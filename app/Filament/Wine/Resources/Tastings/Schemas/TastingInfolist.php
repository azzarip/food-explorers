<?php

namespace App\Filament\Wine\Resources\Tastings\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TastingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('location.name'),
                TextEntry::make('organizer.name'),
            ]);
    }
}
