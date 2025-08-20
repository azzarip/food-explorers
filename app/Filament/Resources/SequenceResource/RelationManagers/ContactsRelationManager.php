<?php

namespace App\Filament\Resources\SequenceResource\RelationManagers;

use Filament\Tables\Columns\TextColumn;
use Filament\Actions\AttachAction;
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
                TextColumn::make('name_email')
                    ->label('Contact'),
                TextColumn::make('execute_at')->since(),
                TextColumn::make('step'),
                TextColumn::make('stopped_at'),
            ])
            ->headerActions([
                AttachAction::make('add_contact')
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
