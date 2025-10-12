<?php

namespace App\Filament\Wine\Resources\Tastings\Pages;

use App\Filament\Wine\Resources\Tastings\Tastings\TastingResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTasting extends ViewRecord
{
    protected static string $resource = TastingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
