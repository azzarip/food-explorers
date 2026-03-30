<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\SequenceAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

class GeneralInterestSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Interested Pizza Tasting');
        $this->owner->notify(new TelegramNotification('Interested Pizza Tasting', $this->contact));

    }
}
