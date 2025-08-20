<?php

namespace App\Filament\Resources\Events\ContactResource\Pages;

use Filament\Actions\EditAction;
use App\Filament\Resources\Events\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
