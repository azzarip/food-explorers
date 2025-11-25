<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class InterestedMilano extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Interested Milano');
        $this->tag('Cashback Omakase');
        $this->email(\App\Teavel\Emails\InterestedMilano::class);
    }
}
