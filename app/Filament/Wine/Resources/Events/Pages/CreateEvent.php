<?php

namespace App\Filament\Wine\Resources\Events\Pages;

use App\Filament\Wine\Resources\Events\EventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;

}
