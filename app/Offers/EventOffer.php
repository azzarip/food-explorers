<?php

namespace App\Offers;

use Azzarip\Teavel\Offers\BaseOffer;
use Azzarip\Utilities\CHF\CHF;

class EventOffer extends BaseOffer
{
    const IS_SHIPPABLE = false;

    const DAYS_TO_REIMBURSE = 8;
    
    public function getPrice()
    {
        return CHF::int(100);
    }

    public function getDaysToReimburse() {
        return self::DAYS_TO_REIMBURSE;
    }
}
