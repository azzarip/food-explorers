<?php

namespace App\Filament\Resources\SequenceResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactsRelationManager extends RelationManager
{
    protected static string $relationship = 'contacts';
    public function isReadOnly(): bool
    {
        return false;
    }
    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('email')
            ->columns([
                Tables\Columns\TextColumn::make('name_email')
                    ->label('Contact'),
                Tables\Columns\TextColumn::make('execute_at')->since(),
                Tables\Columns\TextColumn::make('step'),
                Tables\Columns\TextColumn::make('stopped_at'),
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make('add_contact')
                ->label('Add Contact')
                ->modalHeading('Add Contact')
                ->recordSelectSearchColumns(['first_name', 'last_name', 'email'])
                ->preloadRecordSelect()
                ->button()
                ->color('info')
                ->action(function ($livewire, array $data) {
                    $livewire->ownerRecord->contacts()->attach($data['recordId'], [
                        'execute_at' => now(),
                    ]);
                })
                ->recordTitle(function ($record) {
                    return $record->name_email;
                }),
            ]);
            
    }
}
