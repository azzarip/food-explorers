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
        return Wait::until("12.04.2025 16:30")->precise()->then(step: 'day5');
    }

    public function day5()
    {
        //Sunday
        $this->email(Paris\BarAVin::class);
        return Wait::for("27 hours")->precise()->then( 'day6');
    }

    public function day6()
    {
        //Monday
        $this->email(Paris\SecondBistrot::class);
        return Wait::for("24 hours")->precise()->then('day7');
    }

    public function day7()
    {
        //Tuesday
        $this->email(Paris\Desserts::class);
        return Wait::for("44 hours")->precise()->then('day8');
    }

    public function day8()
    {
        //Friday
        $this->email(Paris\ThirdBistrot::class);
        return Wait::until("21.04.2025 20:00")->then('day9');
    }
    
    public function day9()
    {
        //Tuesday
        $this->email(Paris\MaisonSota::class);
        return Wait::for("48 hours")->then('day9');
    }
}

