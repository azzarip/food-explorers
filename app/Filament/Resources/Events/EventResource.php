<?php

namespace App\Filament\Resources\Events;

use App\EventPublic;
use App\EventType;
use App\Filament\Resources\Events\EventResource\Pages\CreateEvent;
use App\Filament\Resources\Events\EventResource\Pages\EditEvent;
use App\Filament\Resources\Events\EventResource\Pages\ListEvents;
use App\Filament\Resources\Events\EventResource\Pages\ViewEvent;
use App\Filament\Resources\Events\EventResource\RelationManagers\ContactsRelationManager;
use App\Models\Event;
use App\Models\Location;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?int $navigationSort = -99;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-calendar-days';

    protected static string|\UnitEnum|null $navigationGroup = 'Events';

    protected static ?string $navigationLabel = 'Events';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('capacity')
                    ->integer()
                    ->required()
                    ->step(1)
                    ->minValue(1)
                    ->maxValue(255)
                    ->default(8),
                Select::make('event_type')
                    ->required()
                    ->default(0)
                    ->options(EventType::class),
                Select::make('public_type')
                    ->default(null)
                    ->placeholder('Unlisted')
                    ->options(EventPublic::class),
                Select::make('location_id')
                    ->label('Location')
                    ->required()
                    ->options(Location::all()->pluck('name', 'id'))
                    ->searchable(),
                DateTimePicker::make('scheduled_at')
                    ->native(false)
                    ->required()
                    ->seconds(false),
                DateTimePicker::make('ended_at')
                    ->native(false)
                    ->seconds(false),

            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('location.name_address'),
                TextEntry::make('type'),
                TextEntry::make('public'),
                TextEntry::make('capacity')->getStateUsing(function ($record) {
                    return $record->participants()->count().' / '.$record->capacity;
                }),
                TextEntry::make('scheduled_at')->dateTime(),
                TextEntry::make('ended_at')->dateTime(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('location.name'),
                TextColumn::make('type'),
                TextColumn::make('scheduled_at')
                    ->sortable()
                    ->dateTime('j F Y,  H:m'),
                TextColumn::make('participants')
                    ->getStateUsing(function ($record) {
                        return $record->participants()->count().' / '.$record->capacity;
                    }),
            ])->defaultSort('scheduled_at', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([

            ]);
    }

    public static function getRelations(): array
    {
        return [
            ContactsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'edit' => EditEvent::route('/{record}/edit'),
            'view' => ViewEvent::route('/{record}'),
        ];
    }
}
