<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class InterestedExploreMalaysia extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Interested Explore Malaysia');
    }
}
