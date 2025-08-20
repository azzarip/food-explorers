<?php

namespace App\Filament\Resources\SequenceResource\Pages;

use Filament\Actions\DeleteAction;
use App\Filament\Resources\SequenceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSequence extends EditRecord
{
    protected static string $resource = SequenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
