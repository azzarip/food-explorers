<?php

namespace App\Filament\Store\Resources\OfferResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Store\Resources\OfferResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOffer extends EditRecord
{
    protected static string $resource = OfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
