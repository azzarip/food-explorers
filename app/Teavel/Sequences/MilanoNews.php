<?php

namespace App\Teavel\Sequences;

use App\Teavel\Emails\MilanoDay1;
use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class MilanoNews extends SequenceAutomation
{
    public function start()
    {
        return Wait::until('4/4/2025 9.30')
            ->then('day1')
            ->precise();
    }

    public function day1()
    {
        $this->email(MilanoDay1::class);
        return Wait::until('4/5/2025 9.30')
            ->then('day2')
            ->precise();
    }
}
