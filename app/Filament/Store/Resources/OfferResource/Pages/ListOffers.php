<?php

namespace App\Filament\Store\Resources\OfferResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Store\Resources\OfferResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOffers extends ListRecords
{
    protected static string $resource = OfferResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
