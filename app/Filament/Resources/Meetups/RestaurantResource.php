<?php

namespace App\Filament\Resources\Meetups;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Restaurant;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Meetups\RestaurantResource\Pages;
use App\Filament\Resources\Meetups\RestaurantResource\RelationManagers;

class RestaurantResource extends Resource
{
    protected static ?string $model = Restaurant::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('google_maps_url')->required()->label('Google Maps URL'),
                TextInput::make('address')->required()->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable(),
                TextColumn::make('meetups_count')
                    ->sortable()
                    ->counts('meetups'),
                TextColumn::make('lastMeetup.scheduled_at')
                    ->dateTime('j F Y,  H:m')
                    ->sortable()


            ])->defaultSort('lastMeetup.scheduled_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
            //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\MeetupsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRestaurants::route('/'),
            'create' => Pages\CreateRestaurant::route('/create'),
            'edit' => Pages\EditRestaurant::route('/{record}/edit'),
        ];
    }
}
