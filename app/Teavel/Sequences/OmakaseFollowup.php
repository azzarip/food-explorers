<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class OmakaseFollowup extends SequenceAutomation
{
    public function start()
    {
        return Wait::until('2025-11-25 21:00:00')->then('email1');
    }

    public function email1() {
        $this->tag('Yu-An Omakase');
        $this->email(\App\Teavel\Emails\Milano1::class);
        return Wait::for('18 hours')->then('email2');
    }

    public function email2() {
        $this->email(\App\Teavel\Emails\Milano2::class);
    }
}
