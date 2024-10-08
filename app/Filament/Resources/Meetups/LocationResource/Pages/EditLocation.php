<?php

namespace App\Filament\Resources\Meetups\LocationResource\Pages;

use App\Filament\Resources\Meetups\LocationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLocation extends EditRecord
{
    protected static string $resource = LocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
