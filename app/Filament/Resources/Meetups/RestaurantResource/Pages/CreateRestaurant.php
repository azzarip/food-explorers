<?php

namespace App\Filament\Resources\Meetups\RestaurantResource\Pages;

use App\Filament\Resources\Meetups\RestaurantResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRestaurant extends CreateRecord
{
    protected static string $resource = RestaurantResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }


}
