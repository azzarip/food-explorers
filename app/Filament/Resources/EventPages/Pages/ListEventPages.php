<?php

namespace App\Filament\Resources\EventPages\Pages;

use App\Filament\Resources\EventPages\EventPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEventPages extends ListRecords
{
    protected static string $resource = EventPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
