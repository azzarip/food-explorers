<?php

namespace App\Teavel\Sequences;

use Azzarip\Teavel\Automations\Wait;
use App\Teavel\Emails\Milano;
use Azzarip\Teavel\Automations\SequenceAutomation;

class MilanoNews extends SequenceAutomation
{
    public function start()
    {
        return Wait::until('4/2/2025 15:00')
            ->then('day0')
            ->precise();
    }

    public function day0()
    {
        $this->email(Milano\MilanoDay0::class);
        return Wait::until('4/4/2025 8:30')
            ->then('day1')
            ->precise();
    }

    public function day1()
    {
        $this->email(Milano\MilanoDay1::class);
        return Wait::until('4/5/2025 8:30')
            ->then('day2')
            ->precise();
    }

    public function day2()
    {
        $this->email(Milano\MilanoDay2::class);
        return Wait::until('4/6/2025 8:30')
            ->then('day3')
            ->precise();
    }
    
    public function day3()
    {
        $this->email(Milano\MilanoDay3::class);
        return Wait::until('4/6/2025 16:30')
            ->then('review')
            ->precise();
    }

    public function review()
    {
        $this->email( Milano\MilanoDay3::class);
        return Wait::until('4/6/2025 16:00')
            ->then('review')
            ->precise();
    }
}
