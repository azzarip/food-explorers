<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventPageResource\Pages\CreateEventPage;
use App\Filament\Resources\EventPageResource\Pages\EditEventPage;
use App\Filament\Resources\EventPageResource\Pages\ListEventPages;
use App\Models\Event;
use App\Models\EventPage;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventPageResource extends Resource
{
    protected static ?string $model = EventPage::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    protected static string|\UnitEnum|null $navigationGroup = 'Events';

    protected static ?string $navigationLabel = 'Pages';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('event_id')
                    ->required()
                    ->options(Event::next()->get()
                        ->mapWithKeys(function ($event) {
                            return [$event->id => "{$event->title} ({$event->scheduled_at->format('d/m/Y')})"];
                        })),
                TextInput::make('image')
                    ->required()
                    ->maxLength(255),
                MarkdownEditor::make('description')
                    ->required()
                    ->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('event.title'),
                TextColumn::make('event.scheduled_at')
                    ->dateTime('d/m/Y h:i'),
                TextColumn::make('link')
                    ->default(fn ($record): string => route('eventPage', ['eventPage' => $record->id]))
                    ->url(fn ($record): string => route('eventPage', ['eventPage' => $record->id])),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEventPages::route('/'),
            'create' => CreateEventPage::route('/create'),
            'edit' => EditEventPage::route('/{record}/edit'),
        ];
    }
}
