<?php

namespace App\Filament\Resources\Events;

use App\Filament\Resources\Events\ContactResource\Pages\CreateContact;
use App\Filament\Resources\Events\ContactResource\Pages\EditContact;
use App\Filament\Resources\Events\ContactResource\Pages\ListContacts;
use App\Filament\Resources\Events\ContactResource\Pages\ViewContact;
use App\Filament\Resources\Events\ContactResource\RelationManagers\EventsRelationManager;
use App\Models\Contact;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    protected static string|\UnitEnum|null $navigationGroup = 'Events';

    protected static ?string $navigationLabel = 'Participants';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')->required(),
                TextInput::make('last_name'),
                TextInput::make('email'),
                TextInput::make('phone'),
                TextInput::make('meetup_id'),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema->components([
            TextEntry::make('first_name'),
            TextEntry::make('last_name'),
            TextEntry::make('email'),
            TextEntry::make('phone'),
            TextEntry::make('meetup_id'),
            IconEntry::make('is_registered')->boolean(),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name'),
                TextColumn::make('phone'),
                TextColumn::make('events_count')->counts('events')
                    ->sortable(),
                TextColumn::make('lastEvent.scheduled_at')
                    ->label('Last Event')
                    ->since()
                    ->sortable(),
            ])->defaultSort('events_count', 'desc')
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
            EventsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContacts::route('/'),
            'create' => CreateContact::route('/create'),
            'view' => ViewContact::route('/{record}'),
            'edit' => EditContact::route('/{record}/edit'),
        ];
    }
}
