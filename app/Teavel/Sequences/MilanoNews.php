<?php

namespace App\Teavel\Sequences;

use App\Teavel\Emails\Milano\MilanoDay0;
use App\Teavel\Emails\Milano\MilanoDay1;
use App\Teavel\Emails\Milano\MilanoDay2;
use App\Teavel\Emails\Milano\MilanoDay3;
use App\Teavel\Emails\Milano\Review;
use App\Teavel\Sequences\Adventures\Paris\Milano2Paris;
use Azzarip\Teavel\Automations\SequenceAutomation;
use Azzarip\Teavel\Automations\Wait;

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
        $this->email(MilanoDay0::class);

        return Wait::until('04.04.2025 8:30')
            ->then('day1')
            ->precise();
    }

    public function day1()
    {
        $this->email(MilanoDay1::class);

        return Wait::until('05.04.2025 8:30')
            ->then('day2')
            ->precise();
    }

    public function day2()
    {
        $this->email(MilanoDay2::class);

        return Wait::until('06.04.2025 8:30')
            ->then('day3')
            ->precise();
    }

    public function day3()
    {
        $this->email(MilanoDay3::class);

        return Wait::until('06.04.2025 17:30')
            ->then('review')
            ->precise();
    }

    public function review()
    {
        $this->email(Review::class);
        $this->startSequence(Milano2Paris::class);

    }
}
