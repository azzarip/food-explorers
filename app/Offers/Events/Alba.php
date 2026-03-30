<?php

namespace App\Offers\Events;

use App\Offers\EventOffer;
use App\Teavel\Goals\Forms\GeneralGoingGoal;
use App\Teavel\Goals\Forms\GeneralInterestGoal;
use Azzarip\Utilities\CHF\CHF;

class Alba extends EventOffer
{
    const TITLE = 'Alba Tasting';

    const INTERESTED_GOAL = GeneralInterestGoal::class;

    const COMPLETED_GOAL = GeneralGoingGoal::class;

    public function getPrice()
    {
        return CHF::chf(57);
    }
}
