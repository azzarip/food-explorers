<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\SequenceAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

class GeneralGoingSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Going Pizza Tasting');
        $this->detag('Interested Pizza Tasting');
        $this->owner->notify(new TelegramNotification('Pizza Tasting', $this->contact));
    }
}
