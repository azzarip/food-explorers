<?php

namespace App\Filament\Resources\Meetups\MeetupResource\Pages;

use App\Filament\Resources\Meetups\MeetupResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMeetup extends CreateRecord
{
    protected static string $resource = MeetupResource::class;

    protected static bool $canCreateAnother = false;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

}
