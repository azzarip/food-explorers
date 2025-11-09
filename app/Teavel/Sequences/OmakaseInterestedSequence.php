<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class OmakaseInterestedSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Omakase Interested');
    }
}
