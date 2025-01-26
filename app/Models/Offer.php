<?php

namespace App\Models;

use Exception;
use Illuminate\Support\Facades\Cache;
use Azzarip\Teavel\Models\Offer as BaseOffer;

class Offer extends BaseOffer
{
    public function getEvent() {
        $event_id = Cache::get("event:{$this->slug}");
        
        throw_if(is_null($event_id), new Exception('Event with slug ' . $this->slug . ' not found! Please run `php artisan link:event` to fix this problem.') );
        
        return Event::find($event_id);
    }
}
