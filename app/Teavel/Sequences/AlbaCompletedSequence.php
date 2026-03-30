<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\SequenceAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

class AlbaCompletedSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Going Alba Tasting');
        $this->detag('Interested Alba Tasting');
        $this->owner->notify(new TelegramNotification('Alba Tasting', $this->contact));
    }
}
