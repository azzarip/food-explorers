<?php

namespace App\Teavel\Sequences\Adventures\Paris;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;
use App\Teavel\Emails\Adventures\Paris;

class Milano2Paris extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Interested Petit Paris');
        return Wait::until('07.04.2025 18:00')
            ->then('day0')
            ->precise();
    }

    public function day0()
    {
        //Sunday
        $this->email(Paris\FromMilanoToParis::class);
        return Wait::for("24 hours")->then('day1');
    }

    public function day1()
    {
        //Monday
        $this->email(Paris\PetitParis::class);
        return Wait::carbon("08.04.2025 17:30")->then('day2');
    }

    public function day2()
    {
        //Tuesday
        $this->email(Paris\ParisZurich::class);
        return Wait::carbon("09.04.2025 18:00")->then('day3');
    }

    public function day3()
    {
        //Wednesday
        $this->email(Paris\Bistronomie::class);
        return Wait::carbon("09.04.2025 18:00")->then('day4');
    }
}
