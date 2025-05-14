<?php

namespace App\Teavel\Sequences;

use App\Notifications\TelegramNotification;
use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class GeneralGoingSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Going Pizza Tasting');
        $this->detag('Interested Pizza Tasting');
        $this->owner->notify(new TelegramNotification('Pizza Tasting', $this->contact));
    }
}
