<?php

namespace App\Filament\Store\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use App\Models\Offer;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Store\Resources\OfferResource\Pages;
use App\Filament\Store\Resources\OfferResource\RelationManagers;

class OfferResource extends Resource
{
    protected static ?string $model = Offer::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('view')    
                ->label('View Booking')
                ->color('primary')
                ->icon('heroicon-o-eye')
                ->url(fn ($record) => durl($record->slug, 'book')->__toString())
                ->openUrlInNewTab(),
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
            'index' => Pages\ListOffers::route('/'),
            'create' => Pages\CreateOffer::route('/create'),
            'edit' => Pages\EditOffer::route('/{record}/edit'),
        ];
    }
}
