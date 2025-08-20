<?php

namespace App\Filament\Store\Resources\OrderResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Store\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
