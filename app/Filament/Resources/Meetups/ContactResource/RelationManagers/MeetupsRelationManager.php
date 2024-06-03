<?php

namespace App\Filament\Resources\Meetups\ContactResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Meetup;
use Filament\Forms\Form;
use App\Models\Restaurant;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class MeetupsRelationManager extends RelationManager
{
    protected static string $relationship = 'meetups';

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
                TextColumn::make('restaurant.name'),
                TextColumn::make('scheduled_at')
                    ->dateTime('j F Y'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\Action::make('addMeetup')
                ->label('Add Meetup')
                ->modalHeading('Find Meetup')

                ->form([
                    Select::make('restaurant')
                    ->required()
                    ->options(Restaurant::all()->pluck('name', 'id'))
                    ->live(),
                    Select::make('meetup')
                    ->required()
                    ->options(fn (\Filament\Forms\Get $get) => Meetup::query()
                        ->where('restaurant_id', $get('restaurant'))
                        ->whereDoesntHave('contacts', function ($query) {
                            $query->where('contact_id', $this->ownerRecord->id);
                        })->get()->pluck('title_date', 'id'))
                ])->action(function (array $data) {
                    Meetup::find($data['meetup'])->contacts()->attach($this->ownerRecord);
                }),

            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\DetachAction::make()
                    ->label('Remove'),
                ])
              ,
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }


}

