<?php

namespace App\Offers\Events;

use App\Offers\EventOffer;
use App\Teavel\Goals\Forms\GeneralGoingGoal;
use App\Teavel\Goals\Forms\GeneralInterestGoal;
use Azzarip\Utilities\CHF\CHF;

class PizzaTasting extends EventOffer
{
    const TITLE = 'Pizza Tasting';

    const INTERESTED_GOAL = GeneralInterestGoal::class;

    const COMPLETED_GOAL = GeneralGoingGoal::class;

    public function getPrice()
    {
        return CHF::chf(42);
    }
}
