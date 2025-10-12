<?php

namespace App\Filament\Resources\Events\Locations;

use App\Filament\Resources\Events\Locations\Pages\CreateLocation;
use App\Filament\Resources\Events\Locations\Pages\EditLocation;
use App\Filament\Resources\Events\Locations\Pages\ListLocations;
use App\Filament\Resources\Events\Locations\Pages\ViewLocation;
use App\Models\Location;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class LocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-map-pin';

    protected static string | \UnitEnum | null $navigationGroup = 'Events';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('google_maps_url')->required()->label('Google Maps URL'),
                TextInput::make('address')->required()->columnSpan(2),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
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
                TextColumn::make('lastEvent.scheduled_at')
                    ->label('Last Event')
                    ->since()
                    ->sortable(),
            ])->defaultSort('lastEvent.scheduled_at', 'desc')
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                ActionGroup::make([
                    EditAction::make(),
                    RestoreAction::make(),
                    Action::make('gmap')
                        ->label('Google Maps')
                        ->color('gray')
                        ->icon('heroicon-o-map-pin')
                        ->url(fn (Location $record): string => $record->google_maps_url)
                        ->openUrlInNewTab(),
                    DeleteAction::make(),
                ]),
            ])
            ->toolbarActions([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // RelationManagers\EventsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLocations::route('/'),
            'create' => CreateLocation::route('/create'),
            'edit' => EditLocation::route('/{record}/edit'),
            'view' => ViewLocation::route('/{record}'),
        ];
    }
}
