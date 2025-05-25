<?php

namespace App\Actions\Store;

use App\AzzariApi;
use Azzarip\Teavel\Models\Order;

class CreateInvoice
{
    public static function create(Order $order, array $items)
    {
        if ($order->invoice_id) {
            return;
        }

        $contact = $order->contact;

        $payload = [
            'order_id' => $order->id,
            'email' => $contact->email,
            'total' => $order->total->int,
            'issued_on' => $order->order_date,
            'recipient' => $contact->recipient,
        ];

        $payload['items'] = $items;

        return AzzariApi::post('/invoice', $payload);
    }
}
