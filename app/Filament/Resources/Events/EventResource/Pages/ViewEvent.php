<?php

namespace App\Filament\Resources\Events\EventResource\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewEvent extends ViewRecord
{
    protected static string $resource = EventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('email')
            ->icon('heroicon-m-envelope')
            ->color('info')
            ->url(fn ($record): string => '/event-broadcast?event_id=' . $record->id),
            Actions\EditAction::make(),
        ];
    }
}
