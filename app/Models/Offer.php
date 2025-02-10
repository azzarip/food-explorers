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

    public function getReimbursementTimestamp() {
        return $this->event->scheduled_at->subDays($this->class::DAYS_TO_REIMBURSE)->setTime(13, 0, 0);
    }


    public function getFullTitleAttribute() {
        return $this->title . ' Event - ' . $this->event->scheduled_at->format('d/m/Y');
    }
}
