<?php

namespace App\Filament\Resources\EventPageResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\EventPageResource;
use Filament\Actions;
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
