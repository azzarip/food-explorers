<?php

namespace App\Models;

use Exception;
use App\Models\Event;
use Azzarip\Teavel\Models\Offer as BaseOffer;

class Offer extends BaseOffer
{
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
