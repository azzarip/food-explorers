<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\SequenceResource\Pages\ListSequences;
use App\Filament\Resources\SequenceResource\Pages\CreateSequence;
use App\Filament\Resources\SequenceResource\Pages\ViewSequence;
use App\Filament\Resources\SequenceResource\Pages\EditSequence;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Azzarip\Teavel\Models\Sequence;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SequenceResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SequenceResource\RelationManagers;
use App\Filament\Resources\SequenceResource\RelationManagers\ContactsRelationManager;

class SequenceResource extends Resource
{
    protected static ?string $model = Sequence::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->columnSpan(2),
                MarkdownEditor::make('description')
                    ->toolbarButtons([
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'heading',
                        'italic',
                        'link',
                        'orderedList',
                    ])
                    ->label('Description')
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->formatStateUsing( fn ($state) => trim(str_replace("App\Teavel\Sequences\\", "", $state), '\\'))
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ContactsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSequences::route('/'),
            'create' => CreateSequence::route('/create'),
            'view' => ViewSequence::route('/{record}'),
            'edit' => EditSequence::route('/{record}/edit'),
        ];
    }
}
