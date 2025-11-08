<?php

namespace App\Filament\Store\Resources\Settlements\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Azzarip\Teavel\Filament\Items\ContactSelect;

class SettlementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ContactSelect::make(),
            Repeater::make('details')
    ->schema([
        TextInput::make('description')->required(),
            TextInput::make('amount')
                    ->numeric(),
    ])
    
    ->columns(2)
            ]);

    }
}
