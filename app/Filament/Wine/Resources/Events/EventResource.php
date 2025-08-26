<?php

namespace App\Filament\Wine\Resources\Events;

use BackedEnum;
use App\Models\Wine\Event;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Wine\Resources\Events\Pages\EditEvent;
use App\Filament\Wine\Resources\Events\Pages\ViewEvent;
use App\Filament\Wine\Resources\Events\Pages\ListEvents;
use App\Filament\Wine\Resources\Events\Pages\CreateEvent;
use App\Filament\Wine\Resources\Events\Schemas\EventForm;
use App\Filament\Wine\Resources\Events\Tables\EventsTable;
use App\Filament\Wine\Resources\Events\Schemas\EventInfolist;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static ?string $recordTitleAttribute = 'Title';

    public static function form(Schema $schema): Schema
    {
        return EventForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EventInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventsTable::configure($table);
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
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'view' => ViewEvent::route('/{record}'),
            'edit' => EditEvent::route('/{record}/edit'),
        ];
    }
}
