<?php

namespace App\Filament\Wine\Resources\Tastings\Pages;

use App\Models\Wine\Tasting;
use Illuminate\Database\Eloquent\Model;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Wine\Resources\Tastings\Tastings\TastingResource;

class CreateTasting extends CreateRecord
{
    protected static string $resource = TastingResource::class;

    protected function handleRecordCreation(array $data): Model
    {

        $description = $data['description'] ?? null;
        
        unset($data['description']);

        $record = Tasting::create($data);

        $record->description()->create(['en' => $description]);
        
        return $record;
    }

}
