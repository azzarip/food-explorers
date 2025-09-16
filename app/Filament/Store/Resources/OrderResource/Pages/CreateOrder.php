<?php

namespace App\Filament\Store\Resources\OrderResource\Pages;

use App\Actions\Store\CreateInvoice;
use App\Filament\Store\Resources\OrderResource;
use Azzarip\Teavel\Models\Order;
use Azzarip\Utilities\CHF\CHF;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;

    protected static bool $canCreateAnother = false;

    protected function getCreateFormAction(): Action
    {
        return Action::make('create')
            ->label('Create Invoice')
            ->requiresConfirmation()
            ->modalIcon('heroicon-o-shopping-cart')
            ->modalHeading('Confirm Order Creation')
            ->modalDescription('Are you sure you\'d like to create this order? This cannot be undone.')
            ->modalSubmitActionLabel('Yes, create it')
            ->action(fn () => $this->create())
            ->keyBindings(['mod+s']);
    }

    protected function handleRecordCreation(array $data): Model
    {

        $data['total'] = CHF::chf($data['total']);
        $data['margin'] = CHF::chf($data['margin']);
        foreach ($data['items'] as &$item) {
            $item['price'] *= 100;
            $item['total'] *= 100;
        }
        $order = Order::create([
            'contact_id' => $data['contact_id'],
            'title' => $data['title'],
            'shipping_id' => null,
            'total' => $data['total'],
            'margin' => $data['margin'],
            'order_date' => $data['order_date'],
        ]);

        CreateInvoice::create($order, $data['items']);

        return $order;
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
