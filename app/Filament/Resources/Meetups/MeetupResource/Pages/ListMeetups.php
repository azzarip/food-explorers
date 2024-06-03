<?php

namespace App\Filament\Resources\Meetups\MeetupResource\Pages;

use App\Filament\Resources\Meetups\MeetupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMeetups extends ListRecords
{
    protected static string $resource = MeetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
