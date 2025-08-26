<?php

namespace App\Filament\Wine\Resources\Tastings\Pages;

use App\Filament\Wine\Resources\Tastings\TastingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTastings extends ListRecords
{
    protected static string $resource = TastingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->icon('heroicon-o-plus'),
        ];
    }
}
