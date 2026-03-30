<?php

namespace App\Offers\Events;

use App\Offers\EventOffer;
use App\Teavel\Goals\Forms\AlbaCompletedForm;
use App\Teavel\Goals\Forms\AlbaInterested;
use Azzarip\Utilities\CHF\CHF;

class Alba extends EventOffer
{
    const TITLE = 'Alba Tasting';

    const INTERESTED_GOAL = AlbaInterested::class;

    const COMPLETED_GOAL = AlbaCompletedForm::class;

    public function getPrice()
    {
        return CHF::chf(57);
    }
}
