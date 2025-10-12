<?php

namespace App\Filament\Resources\Sequences;

use App\Filament\Resources\Sequences\Pages\CreateSequence;
use App\Filament\Resources\Sequences\Pages\EditSequence;
use App\Filament\Resources\Sequences\Pages\ListSequences;
use App\Filament\Resources\Sequences\Pages\ViewSequence;
use App\Filament\Resources\Sequences\RelationManagers\ContactsRelationManager;
use Azzarip\Teavel\Models\Sequence;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

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
                TextColumn::make('name')->formatStateUsing(fn ($state) => trim(str_replace("App\Teavel\Sequences\\", '', $state), '\\')),
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
