<?php

namespace App\Filament\Wine\Resources\Tastings\Pages;

use App\Filament\Wine\Resources\Tastings\TastingResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTasting extends EditRecord
{
    protected static string $resource = TastingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
