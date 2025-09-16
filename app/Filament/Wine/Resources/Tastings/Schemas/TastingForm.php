<?php

namespace App\Filament\Wine\Resources\Tastings\Schemas;

use App\Enums\LocationType;
use App\Models\Location;
use App\Models\Wine\Organizer;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class TastingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                Select::make('organizer_id')
                    ->label('Organizer')
                    ->options(Organizer::query()->pluck('name', 'id'))
                    ->createOptionForm([
                        TextInput::make('name')->required(),
                        TextInput::make('website'),
                    ])
                    ->createOptionUsing(fn (array $data) => Organizer::create($data)),
                Select::make('location_id')
                    ->label('Location')
                    ->options(Location::where('type_id', LocationType::Wine->value)
                        ->pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->createOptionForm([
                        TextInput::make('name')->required(),
                        TextInput::make('google_maps_url')->required(),
                        TextInput::make('address')->required(),
                    ])
                    ->createOptionUsing(fn (array $data) => Location::create($data + ['type_id' => LocationType::Wine->value])),
                Repeater::make('dates')
                    ->relationship('dates')
                    ->schema([
                        Grid::make()->columns(3)->schema([
                            DatePicker::make('date')
                                ->native(false)
                                ->required()
                                ->displayFormat('d-m-Y')->format('Y-m-d'),
                            TimePicker::make('start_time')
                                ->required()
                                ->seconds(false),
                            TimePicker::make('end_time')->seconds(false),
                        ]),
                    ])
                    ->columnSpanFull()
                    ->minItems(1)
                    ->addActionLabel('Add Date'),

            ]);
    }
}
