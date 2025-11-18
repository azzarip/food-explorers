<?php

namespace App\Filament\Wine\Resources\Organizers\RelationManagers;

use App\Filament\Wine\Resources\Tastings\Tastings\TastingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class TastingsRelationManager extends RelationManager
{
    protected static string $relationship = 'tastings';

    protected static ?string $relatedResource = TastingResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->headerActions([
                CreateAction::make(),
            ]);
    }
}
