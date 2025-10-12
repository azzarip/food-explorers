<?php

namespace App\Filament\Store\Resources\Settlements\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class SettlementInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('contact_id')
                    ->numeric(),
                TextEntry::make('conversion_factor')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('amount')
                    ->numeric()
                    ->placeholder('-'),
            ]);
    }
}
