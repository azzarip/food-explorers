<?php

namespace App\Offers\Event;

use App\Teavel\Sequences\Events\InterestedRumTasting;
use Azzarip\Utilities\CHF\CHF;

class RumTasting
{
    const TITLE = 'Rum Tasting';

    const INTERESTED_GOAL = InterestedRumTasting::class;
    
    public function getPrice()
    {
        return CHF::chf(49);
    }
}
