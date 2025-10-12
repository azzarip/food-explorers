<?php

namespace App\Filament\Store\Resources\Offers;

use App\Filament\Store\Resources\Offers\Pages\CreateOffer;
use App\Filament\Store\Resources\Offers\Pages\EditOffer;
use App\Filament\Store\Resources\Offers\Pages\ListOffers;
use App\Models\Event;
use App\Models\Offer;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OfferResource extends Resource
{
    protected static ?string $model = Offer::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-bookmark-square';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('class')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('slug')
                    ->required(),
                Select::make('event_id')
                    ->required()
                    ->options(Event::next()->pluck('title', 'id')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('class'),
                TextColumn::make('slug'),
                TextColumn::make('event.scheduled_at')->dateTime('d.m.Y H:i'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                Action::make('view')
                    ->label('View Booking')
                    ->color('primary')
                    ->icon('heroicon-o-eye')
                    ->url(fn ($record) => durl($record->slug, 'book')->__toString())
                    ->openUrlInNewTab(),
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
            'index' => ListOffers::route('/'),
            'create' => CreateOffer::route('/create'),
            'edit' => EditOffer::route('/{record}/edit'),
        ];
    }
}
