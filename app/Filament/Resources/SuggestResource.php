<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\SuggestResource\Pages\ListSuggests;
use Filament\Forms;
use Filament\Tables;
use Filament\Tables\Table;
use Domains\My\Models\Suggest;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SuggestResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SuggestResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

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
                    ->dateTime('d.m.Y')
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
