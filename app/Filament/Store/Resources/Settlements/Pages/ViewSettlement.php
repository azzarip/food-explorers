<?php

namespace App\Filament\Store\Resources\Settlements\Pages;

use App\Filament\Store\Resources\Settlements\SettlementResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSettlement extends ViewRecord
{
    protected static string $resource = SettlementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
