<?php

namespace App\Filament\Store\Resources\Settlements;

use App\Filament\Store\Resources\Settlements\Pages\CreateSettlement;
use App\Filament\Store\Resources\Settlements\Pages\EditSettlement;
use App\Filament\Store\Resources\Settlements\Pages\ListSettlements;
use App\Filament\Store\Resources\Settlements\Pages\ViewSettlement;
use App\Filament\Store\Resources\Settlements\Schemas\SettlementForm;
use App\Filament\Store\Resources\Settlements\Schemas\SettlementInfolist;
use App\Filament\Store\Resources\Settlements\Tables\SettlementsTable;
use App\Models\Settlement;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SettlementResource extends Resource
{
    protected static ?string $model = Settlement::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SettlementForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SettlementInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SettlementsTable::configure($table);
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
            'index' => ListSettlements::route('/'),
            'create' => CreateSettlement::route('/create'),
            'view' => ViewSettlement::route('/{record}'),
            'edit' => EditSettlement::route('/{record}/edit'),
        ];
    }
}
