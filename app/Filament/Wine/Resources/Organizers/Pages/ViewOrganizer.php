<?php

namespace App\Filament\Wine\Resources\Organizers\Pages;

use App\Filament\Wine\Resources\Organizers\OrganizerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewOrganizer extends ViewRecord
{
    protected static string $resource = OrganizerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
