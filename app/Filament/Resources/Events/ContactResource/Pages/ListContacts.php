<?php

namespace App\Filament\Resources\Events\ContactResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\Events\ContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
