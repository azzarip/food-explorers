<?php

namespace App\Filament\Wine\Resources\Tastings\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TastingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('location.name')->label('Location'),
                TextEntry::make('organizer.name')->label('Organizer'),
                IconEntry::make('is_dinner')->label('Is Dinner Event')->boolean(),
                TextEntry::make('description.text')->label('Event Description')->markdown()->columnSpanFull(),
            ]);
    }
}
