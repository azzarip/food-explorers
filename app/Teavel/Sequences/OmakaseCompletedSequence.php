<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

class OmakaseCompletedSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Omakase Completed');
        $this->detag('Omakase Interested');
        $this->owner()->notify(new TelegramNotification('Omakase', $this->contact));

        return Wait::until('18/11/2025 15:00')->then('nextStep');
    }
}
