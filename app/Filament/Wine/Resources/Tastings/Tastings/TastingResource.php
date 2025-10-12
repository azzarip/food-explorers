<?php

namespace App\Filament\Wine\Resources\Tastings\Tastings;

use App\Filament\Wine\Resources\Tastings\Pages\CreateTasting;
use App\Filament\Wine\Resources\Tastings\Pages\EditTasting;
use App\Filament\Wine\Resources\Tastings\Pages\ListTastings;
use App\Filament\Wine\Resources\Tastings\Pages\ViewTasting;
use App\Filament\Wine\Resources\Tastings\Schemas\TastingForm;
use App\Filament\Wine\Resources\Tastings\Schemas\TastingInfolist;
use App\Filament\Wine\Resources\Tastings\Tables\TastingsTable;
use App\Models\Wine\Tasting;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TastingResource extends Resource
{
    protected static ?string $model = Tasting::class;

    protected static string | \BackedEnum | null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return TastingForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TastingInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TastingsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTastings::route('/'),
            'create' => CreateTasting::route('/create'),
            'view' => ViewTasting::route('/{record}'),
            'edit' => EditTasting::route('/{record}/edit'),
        ];
    }
}
