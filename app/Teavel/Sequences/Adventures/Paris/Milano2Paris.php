<?php

namespace App\Teavel\Sequences\Adventures\Paris;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;
use App\Teavel\Emails\Adventures\Paris\FromMilanoToParis;

class Milano2Paris extends SequenceAutomation
{
    public function start()
    {
        $this->email(FromMilanoToParis::class);
        $nextDayEightAM = now()->addDay()->setTime(8, 0, 0);
        return Wait::carbon($nextDayEightAM)->then('day1');
    }
}
