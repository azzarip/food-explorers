<?php

namespace App\Filament\Resources\Events\Contacts\RelationManagers;

use App\Models\Event;
use App\Models\Location;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DetachAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventsRelationManager extends RelationManager
{
    protected static string $relationship = 'events';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('location.name'),
                TextColumn::make('scheduled_at')
                    ->dateTime('j F Y'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Action::make('addEvent')
                    ->label('Add Event')
                    ->modalHeading('Find Event'),

                //     ->form([
                //     //     Select::make('location')
                //     //     ->required()
                //     //     ->options(Location::all()->pluck('name', 'id'))
                //     //     ->live(),
                //     //     Select::make('event')
                //     //     ->required()
                //     //     ->options(fn (\Filament\Forms\Get $get) => Event::query()
                //     //         ->where('location_id', $get('location'))
                //     //         ->whereDoesntHave('contacts', function ($query) {
                //     //             $query->where('contact_id', $this->ownerRecord->id);
                //     //         })->get()->pluck('title_date', 'id'))
                //     // ])->action(function (array $data) {
                //     //     Event::find($data['event'])->contacts()->attach($this->ownerRecord);
                //     // }),

            ])
            ->recordActions([
                ActionGroup::make([
                    DetachAction::make()
                        ->label('Remove'),
                ]),
            ])
            ->toolbarActions([

            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
