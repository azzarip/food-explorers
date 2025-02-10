<?php

namespace App\Offers\Events;

use App\Offers\EventOffer;
use App\Teavel\Goals\Forms\InterestedExploreMalaysia;
use Azzarip\Utilities\CHF\CHF;

class ExploreMalaysia extends EventOffer
{
    const TITLE = 'Explore Malaysia';

    const INTERESTED_GOAL = InterestedExploreMalaysia::class;
    
    public function getPrice()
    {
        return CHF::chf(62);
    }

    
}
