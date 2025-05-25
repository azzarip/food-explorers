<?php

namespace App\Actions\Offer;

use App\AzzariApi;
use Azzarip\Teavel\Models\Order;

class DownloadInvoice
{
    public static function download(Order $order)
    {
        if (! $order->invoice_id) {
            return;
        }

        $response = AzzariApi::get("/invoice/$order->invoice_id");

        if ($response->successful()) {
            return response()->streamDownload(function () use ($response) {
                echo $response->body();
            }, "Rechung_{$order->order_date}.pdf");
      }
    
    }
}
