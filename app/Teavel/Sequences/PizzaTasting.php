<?php

namespace App\Teavel\Sequences;

use App\Teavel\Emails\PizzaTastingInvite;
use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class PizzaTasting extends SequenceAutomation
{
    public function start()
    {
        $this->email(PizzaTastingInvite::class);
    }
}
