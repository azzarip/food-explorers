<?php

namespace App\Offers\Event;

use Azzarip\Utilities\CHF\CHF;

class RumTasting
{
    const NAME = 'Rum Tasting';


    public function getPrice()
    {
        return CHF::chf(49);
    }
}
