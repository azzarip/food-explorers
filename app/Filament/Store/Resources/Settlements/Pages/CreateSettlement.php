<?php

namespace App\Filament\Store\Resources\Settlements\Pages;

use App\Filament\Store\Resources\Settlements\SettlementResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSettlement extends CreateRecord
{
    protected static string $resource = SettlementResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
{
    $data['amount'] = collect($data['details'] ?? [])
        ->sum(fn ($detail) => floatval($detail['amount'] ?? 0));

    return $data;

}


}
