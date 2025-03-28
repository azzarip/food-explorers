<?php

namespace App\Filament\Resources\Events;

use App\EventType;
use Filament\Forms;
use App\EventPublic;
use Filament\Tables;
use App\Models\Event;
use App\Models\Location;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Events\EventResource\Pages;
use App\Filament\Resources\Events\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?int $navigationSort = -99;
    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationGroup = 'Events';
    protected static ?string $navigationLabel = 'Events';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
        ->schema([
            TextEntry::make('title'),
            TextEntry::make('location.name_address'),
            TextEntry::make('type'),
            TextEntry::make('public'),
            TextEntry::make('capacity')->getStateUsing( function ($record){
                return $record->participants()->count() . ' / ' . $record->capacity;
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
                    ->getStateUsing( function ($record){
                        return $record->participants()->count() . ' / ' . $record->capacity;
                 })
            ])->defaultSort('scheduled_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ContactsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
            'view' => Pages\ViewEvent::route('/{record}'),
        ];
    }
}
