<?php

namespace App\Teavel\Sequences;

use App\Teavel\Emails\Milano;
use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;
use App\Teavel\Sequences\Adventures\Paris\Milano2Paris;

class MilanoNews extends SequenceAutomation
{
    public function start()
    {
        return Wait::until('02.04.2025 18:00')
            ->then('day0')
            ->precise();
    }

    public function day0()
    {
        $this->email(Milano\MilanoDay0::class);
        return Wait::until('04.04.2025 8:30')
            ->then('day1')
            ->precise();
    }

    public function day1()
    {
        $this->email(Milano\MilanoDay1::class);
        return Wait::until('05.04.2025 8:30')
            ->then('day2')
            ->precise();
    }

    public function day2()
    {
        $this->email(Milano\MilanoDay2::class);
        return Wait::until('06.04.2025 8:30')
            ->then('day3')
            ->precise();
    }
    
    public function day3()
    {
        $this->email(Milano\MilanoDay3::class);
        return Wait::until('06.04.2025 17:30')
            ->then('review')
            ->precise();
    }

    public function review()
    {
        $this->email(Milano\Review::class);
        $this->startSequence(Milano2Paris::class);

    }
}
