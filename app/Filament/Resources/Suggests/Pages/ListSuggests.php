<?php

namespace App\Filament\Resources\Suggests\Pages;

use App\Filament\Resources\Suggests\SuggestResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSuggests extends ListRecords
{
    protected static string $resource = SuggestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
