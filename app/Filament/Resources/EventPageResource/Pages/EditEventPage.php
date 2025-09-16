<?php

namespace App\Filament\Resources\EventPageResource\Pages;

use App\Filament\Resources\EventPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEventPage extends EditRecord
{
    protected static string $resource = EventPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
