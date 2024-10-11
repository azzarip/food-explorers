<?php

namespace App\Filament\Resources\Events\ContactResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use App\Models\Location;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class EventsRelationManager extends RelationManager
{
    protected static string $relationship = 'events';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
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
                Tables\Actions\Action::make('addEvent')
                ->label('Add Event')
                ->modalHeading('Find Event')

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
            ->actions([
                ActionGroup::make([
                    Tables\Actions\DetachAction::make()
                    ->label('Remove'),
                ]),
            ])
            ->bulkActions([

            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }


}

