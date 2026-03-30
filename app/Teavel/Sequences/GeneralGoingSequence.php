<?php

namespace App\Teavel\Sequences;

use App\Notifications\TelegramNotification;
use Azzarip\Teavel\Automations\SequenceAutomation;

class GeneralGoingSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Going Alba Tasting');
        $this->detag('Interested Alba Tasting');
        $this->owner->notify(new TelegramNotification('Alba Tasting', $this->contact));
    }
}
