<?php

namespace App\Offers\Events;

use App\Offers\EventOffer;
use App\Teavel\Sequences\Events\InterestedRumTasting;
use Azzarip\Utilities\CHF\CHF;

class ExploreMalaysia extends EventOffer
{
    const TITLE = 'Explore Malaysia';

    const INTERESTED_GOAL = InterestedRumTasting::class;
    
    public function getPrice()
    {
        return CHF::chf(62);
    }

    
}
