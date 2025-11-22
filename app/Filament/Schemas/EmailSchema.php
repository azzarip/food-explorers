<?php

namespace App\Filament\Schemas;

use App\Models\Contact;
use Filament\Schemas\Schema;
use Azzarip\Teavel\Models\Tag;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Schemas\Components\Utilities\Get;

class EmailSchema
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                    ->label('Group')
                    ->options([
                        'contact' => 'Contact',
                        'tag' => 'Tag',
                    ])
                    ->default('contact')
                    ->selectablePlaceholder(false)
                    ->placeholder(false)
                    ->required()
                    ->live()
                    ->columnSpan(1),
                Select::make('contact_id')
                    ->required()
                    ->preload()
                    ->hidden(fn (Get $get): bool => $get('type') != 'contact')
                    ->label('Contact')
                    ->searchable()
                    ->getSearchResultsUsing(fn (string $search): array => Contact::where('first_name', 'like', "%{$search}%")
                        ->orWhere('last_name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->get()
                        ->mapWithKeys(fn (Model $record): array => [$record->id => $record->name_email])
                        ->toArray()),
                Select::make('tag_id')
                    ->required()
                    ->preload()
                    ->hidden(fn (Get $get): bool => $get('type') != 'tag')
                    ->label('Tag')
                    ->searchable()
                    ->getSearchResultsUsing(fn (string $search): array => Tag::where('name', 'like', "%{$search}%")
                        ->get()
                        ->mapWithKeys(fn (Model $record): array => [$record->id => $record->name . " ({$record->count_contacts})"])
                        ->toArray()),
                TextInput::make('subject')->required()->columnSpanFull(),
                MarkdownEditor::make('body')
                    ->required()
                    ->disableToolbarButtons(['attachFiles'])
                    ->columnSpanFull(),
            ]);
    }
}