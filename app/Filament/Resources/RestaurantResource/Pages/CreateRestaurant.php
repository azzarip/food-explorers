<?php

namespace App\Filament\Resources\RestaurantResource\Pages;

use App\Filament\Resources\RestaurantResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRestaurant extends CreateRecord
{
    protected static string $resource = RestaurantResource::class;

    protected static bool $canCreateAnother = false;

    public ?string $previousUrl = '/meetups/restaurants';

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }


}
