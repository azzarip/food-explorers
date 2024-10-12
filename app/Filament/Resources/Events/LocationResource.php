<?php

namespace App\Filament\Resources\Events;

use Filament\Tables;
use App\Models\Location;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Events\LocationResource\Pages;
use Filament\Tables\Actions\ActionGroup;

class LocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationGroup = 'Events';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('google_maps_url')->required()->label('Google Maps URL'),
                TextInput::make('address')->required()->columnSpan(2),
            ]);
    }


    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name'),
                TextEntry::make('google_maps_url')
                ->url(fn ($state): string => $state)
                ->openUrlInNewTab(),
                TextEntry::make('address'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable(),
                TextColumn::make('address'),
                TextColumn::make('events_count')->counts('events'),
                TextColumn::make('getLastEvent.scheduled_at')
                    ->label('Last Event')
                    ->since()
                ])
            ->filters([
                Tables\Filters\TrashedFilter::make(), 
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\RestoreAction::make(),
                    Tables\Actions\Action::make('gmap')
                    ->label('Google Maps')
                    ->color('gray')
                    ->icon('heroicon-o-map-pin')
                    ->url(fn (Location $record): string => $record->google_maps_url)
                    ->openUrlInNewTab(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
            //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //RelationManagers\EventsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLocations::route('/'),
            'create' => Pages\CreateLocation::route('/create'),
            'edit' => Pages\EditLocation::route('/{record}/edit'),
            'view' => Pages\ViewLocation::route('/{record}'),
        ];
    }
}
