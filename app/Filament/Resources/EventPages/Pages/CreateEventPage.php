<?php

namespace App\Filament\Resources\EventPages\Pages;

use App\Filament\Resources\EventPages\EventPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEventPage extends CreateRecord
{
    protected static string $resource = EventPageResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
