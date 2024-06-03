<?php

namespace App\Filament\Resources\Meetups\RestaurantResource\Pages;

use App\Filament\Resources\Meetups\RestaurantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRestaurants extends ListRecords
{
    protected static string $resource = RestaurantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
