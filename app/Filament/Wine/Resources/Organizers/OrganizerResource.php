<?php

namespace App\Filament\Wine\Resources\Organizers;

use BackedEnum;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use App\Models\Wine\Organizer;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Wine\Resources\Organizers\Pages\EditOrganizer;
use App\Filament\Wine\Resources\Organizers\Pages\ViewOrganizer;
use App\Filament\Wine\Resources\Organizers\Pages\ListOrganizers;
use App\Filament\Wine\Resources\Organizers\Pages\CreateOrganizer;
use App\Filament\Wine\Resources\Organizers\Schemas\OrganizerForm;
use App\Filament\Wine\Resources\Organizers\Tables\OrganizersTable;
use App\Filament\Wine\Resources\Organizers\Schemas\OrganizerInfolist;
use App\Filament\Wine\Resources\Organizers\RelationManagers\TastingsRelationManager;

class OrganizerResource extends Resource
{
    protected static ?string $model = Organizer::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingLibrary;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return OrganizerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return OrganizerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrganizersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            TastingsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOrganizers::route('/'),
            'create' => CreateOrganizer::route('/create'),
            'view' => ViewOrganizer::route('/{record}'),
            'edit' => EditOrganizer::route('/{record}/edit'),
        ];
    }
}
