<?php

namespace App\Filament\Resources\SequenceResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Resources\SequenceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSequences extends ListRecords
{
    protected static string $resource = SequenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
