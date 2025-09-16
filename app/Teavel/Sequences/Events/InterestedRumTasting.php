<?php

namespace App\Teavel\Sequences\Events;

use Azzarip\Teavel\Automations\SequenceAutomation;

class InterestedRumTasting extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Interested Rum Tasting');
    }
}
