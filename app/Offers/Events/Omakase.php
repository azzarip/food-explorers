<?php

namespace App\Offers\Events;

use App\Offers\EventOffer;
use App\Teavel\Goals\Forms\GeneralGoingGoal;
use App\Teavel\Goals\Forms\GeneralInterestGoal;
use App\Teavel\Goals\Forms\OmakaseCompletedForm;
use App\Teavel\Goals\Forms\OmakaseInterested;
use Azzarip\Utilities\CHF\CHF;

class Omakase extends EventOffer
{
    const TITLE = 'Omakase Yu-An';

    const INTERESTED_GOAL = OmakaseInterested::class;

    const COMPLETED_GOAL = OmakaseCompletedForm::class;

    public function getPrice()
    {
        return CHF::chf(76);
    }
}
