<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class OmakaseCompletedSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Omakase Completed');
        $this->detag('Omakase Interested');

        return Wait::until('18/11/2025 15:00')->then('nextStep');
    }
}
