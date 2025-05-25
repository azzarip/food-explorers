<?php

namespace App\Filament\Store\Resources\OfferResource\Pages;

use App\Filament\Store\Resources\OfferResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOffer extends CreateRecord
{
    protected static bool $canCreateAnother = false;

    protected static string $resource = OfferResource::class;
    
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['type_id'] = 1;
        return $data;
    }
}
