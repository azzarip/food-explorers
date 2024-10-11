<?php

namespace App\Filament\Resources\Events\EventResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Contact;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Azzarip\Teavel\Filament\Items\ContactSelect;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class ContactsRelationManager extends RelationManager
{
    protected static string $relationship = 'contacts';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('first_name')
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Name'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make('add_contact')
                    ->label('Add Contact')
                    ->modalHeading('Add Contact')
                    ->recordSelectSearchColumns(['first_name', 'last_name', 'email'])
                    ->button()->color('primary')
                    ->recordTitle(function ($record) {
                        return $record->name_email;
                    })
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
