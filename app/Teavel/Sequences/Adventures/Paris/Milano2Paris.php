<?php

namespace App\Teavel\Sequences\Adventures\Paris;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;
use App\Teavel\Emails\Adventures\Paris;

class Milano2Paris extends SequenceAutomation
{
    public function start()
    {
        return Wait::until('07.04.2025 18:00')
            ->then('day0')
            ->precise();
    }

    public function day0()
    {
        //Monday
        $this->tag('Interested Petit Paris');
        $this->email(Paris\FromMilanoToParis::class);
        return Wait::for("24 hours")->then('day1');
    }

    public function day1()
    {
        //Tuesday
        $this->email(Paris\PetitParis::class);
        return Wait::until("09.04.2025 17:30")->then('day2');
    }

    public function day2()
    {
        //Wednesday
        $this->email(Paris\Bistronomie::class);
        return Wait::for("24 hours")->then('day3');
    }

    public function day3()
    {
        //Thursday
        $this->email(Paris\Testimonial::class);
        return Wait::for("24 hours")->then('day4');
    }

    public function day4()
    {
        //Friday
        $this->email(Paris\FirstBistrot::class);
        return Wait::for("12.04.2025 16:30")->precise()->then('day5');
    }
}
