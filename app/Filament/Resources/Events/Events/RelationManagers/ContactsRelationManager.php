<?php

namespace App\Filament\Resources\Events\Events\RelationManagers;

use Filament\Actions\ActionGroup;
use Filament\Actions\AttachAction;
use Filament\Actions\DetachAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactsRelationManager extends RelationManager
{
    protected static ?string $label = 'Participants';

    protected static ?string $title = 'Participants';

    protected static string $relationship = 'contacts';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('first_name')
            ->columns([
                TextColumn::make('full_name')
                    ->label('Name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                AttachAction::make('add_contact')
                    ->label('Add Participant')
                    ->modalHeading('Add Participant')
                    ->recordSelectSearchColumns(['first_name', 'last_name', 'email'])
                    ->button()->color('primary')
                    ->recordTitle(function ($record) {
                        return $record->name_email;
                    }),
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
