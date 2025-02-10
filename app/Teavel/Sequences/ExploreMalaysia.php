<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class ExploreMalaysia extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Going Explore Malaysia');
    }
}
