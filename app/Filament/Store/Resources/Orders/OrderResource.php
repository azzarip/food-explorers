<?php

namespace App\Filament\Store\Resources\Orders;

use App\Actions\Store\DownloadInvoice;
use App\Filament\Store\Resources\Orders\Pages\CreateOrder;
use App\Filament\Store\Resources\Orders\Pages\ListOrders;
use App\Models\Contact;
use Azzarip\Teavel\Filament\Items\ContactSelect;
use Azzarip\Teavel\Models\Order;
use Exception;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Order Data')->schema([
                TextInput::make('title')->required(),
                Grid::make(3)->schema([
                    ContactSelect::make()
                        ->live()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('contact_has_address', Contact::find($state)?->hasAddress)
                        )->columnSpan(2),
                    Placeholder::make('has_address')
                        ->label('Contact Has Address')
                        ->content(function ($get) {
                            $hasAddress = $get('contact_has_address');

                            if ($hasAddress === null) {
                                return '---';
                            }

                            return $hasAddress
                                ? '✅ Has Address'
                                : '❌ No Address';
                        })->columnSpan(1),
                ]),

                Grid::make(3)->schema([
                    DatePicker::make('order_date')
                        ->label('Order Date')
                        ->weekStartsOnMonday()
                        ->required()
                        ->native(false)
                        ->default(now())
                        ->displayFormat('j F Y')
                        ->closeOnDateSelection(),
                    TextInput::make('margin')
                        ->required()
                        ->default(0)
                        ->numeric()
                        ->prefix('CHF')
                        ->step(0.01),
                    TextInput::make('total')
                        ->numeric()
                        ->required()
                        ->prefix('CHF')
                        ->readOnly(),
                ]),
            ]),

            Repeater::make('items')
                ->columnSpan(2)
                ->schema([
                    TextInput::make('name')->required()->columnSpan(2),
                    TextInput::make('price')
                        ->required()
                        ->numeric()
                        ->prefix('CHF')
                        ->step(0.05)
                        ->live(debounce: 400)
                        ->afterStateUpdated(function (Get $get, Set $set) {
                            self::updateTotals($get, $set);
                        }),
                    TextInput::make('quantity')
                        ->required()
                        ->numeric()
                        ->step(1)
                        ->minValue(1)
                        ->default(1)
                        ->live(debounce: 400)
                        ->afterStateUpdated(function (Get $get, Set $set) {
                            self::updateTotals($get, $set);
                        }),
                    TextInput::make('total')
                        ->readonly()
                        ->prefix('CHF'),
                ])->columns(5),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('contact.name_email'),
                TextColumn::make('order_date')
                    ->sortable()
                    ->defaultSort('desc'),
                TextColumn::make('total'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    Action::make('Download Invoice')
                        ->icon(icon: 'heroicon-m-arrow-down-tray')
                        ->color('info')
                        ->action(function (Model $record) {
                            try {
                                return DownloadInvoice::download($record);
                            } catch (Exception $e) {
                                Notification::make()
                                    ->title('Invoice cannot be found.')
                                    ->danger()
                                    ->send();
                            }
                        }),
                ])->iconButton(),
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
            'index' => ListOrders::route('/'),
            'create' => CreateOrder::route('/create'),
        ];
    }

    public static function updateTotals($get, $set): void
    {
        if (! is_numeric($get('price'))) {
            return;
        }
        $set('total', $get('price') * $get('quantity'));
        $total = 0;
        foreach ($get('data.items', true) as $item) {
            $total += $item['total'];
        }
        $set('data.total', $total, true);
    }
}
