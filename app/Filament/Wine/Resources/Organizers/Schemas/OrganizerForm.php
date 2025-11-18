<?php

namespace App\Filament\Wine\Resources\Organizers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrganizerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('website')
                    ->url(),
            ]);
    }
}
