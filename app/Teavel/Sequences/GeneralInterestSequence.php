<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\SequenceAutomation;

class GeneralInterestSequence extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Interested Pizza Tasting');
    }
}
