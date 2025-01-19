<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use App\Models\EventPage;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EventPageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventPageResource\RelationManagers;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class EventPageResource extends Resource
{
    protected static ?string $model = EventPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Events';
    protected static ?string $navigationLabel = 'Pages';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                \Filament\Forms\Components\Select::make('event_id')
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
                    ->default(fn ($record): string => route('eventPage', ['id' => $record->id]))
                    ->url(fn ($record): string => route('eventPage', ['id' => $record->id])),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListEventPages::route('/'),
            'create' => Pages\CreateEventPage::route('/create'),
            'edit' => Pages\EditEventPage::route('/{record}/edit'),
        ];
    }
}
