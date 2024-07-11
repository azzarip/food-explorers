<?php

namespace App\Filament\Resources\Meetups;

use Filament\Forms;
use Filament\Tables;
use App\Models\Meetup;
use Filament\Forms\Form;
use App\Models\Location;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\Meetups\MeetupResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Meetups\MeetupResource\RelationManagers;

class MeetupResource extends Resource
{
    protected static ?string $model = Meetup::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Select::make('location_id')
                    ->label('Location')
                    ->required()
                    ->options(Location::all()->pluck('name', 'id'))
                    ->searchable(),
                DateTimePicker::make('scheduled_at')
                    ->native(false)
                    ->required()
                    ->seconds(false),
                TextInput::make('max_participants')
                    ->integer()
                    ->required()
                    ->step(1)
                    ->minValue(1)
                    ->maxValue(255)
                    ->default(6),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('location.name'),
                TextColumn::make('scheduled_at')
                    ->dateTime('j F Y,  H:m'),
                TextColumn::make('max_participants'),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListMeetups::route('/'),
            'create' => Pages\CreateMeetup::route('/create'),
            'edit' => Pages\EditMeetup::route('/{record}/edit'),
            'view' => Pages\ViewMeetup::route('/{record}'),
        ];
    }
}
