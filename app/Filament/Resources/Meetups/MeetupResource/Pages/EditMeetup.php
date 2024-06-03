<?php

namespace App\Filament\Resources\Meetups\MeetupResource\Pages;

use App\Filament\Resources\Meetups\MeetupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMeetup extends EditRecord
{
    protected static string $resource = MeetupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
