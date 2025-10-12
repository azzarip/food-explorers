<?php

namespace App\Filament\Resources\Suggests;

use App\Filament\Resources\Suggests\Pages\ListSuggests;
use Domains\My\Models\Suggest;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SuggestResource extends Resource
{
    protected static ?string $model = Suggest::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-light-bulb';

    protected static ?int $navigationSort = 90;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('text'),
                TextColumn::make('contact.full_name'),
                TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime('d.m.Y'),
            ])
            ->filters([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::$model::count();
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSuggests::route('/'),
        ];
    }
}
