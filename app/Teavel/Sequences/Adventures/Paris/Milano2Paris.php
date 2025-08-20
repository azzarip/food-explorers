<?php

namespace App\Teavel\Sequences\Adventures\Paris;

use App\Teavel\Emails\Adventures\Paris\FromMilanoToParis;
use App\Teavel\Emails\Adventures\Paris\PetitParis;
use App\Teavel\Emails\Adventures\Paris\Bistronomie;
use App\Teavel\Emails\Adventures\Paris\Testimonial;
use App\Teavel\Emails\Adventures\Paris\FirstBistrot;
use App\Teavel\Emails\Adventures\Paris\BarAVin;
use App\Teavel\Emails\Adventures\Paris\SecondBistrot;
use App\Teavel\Emails\Adventures\Paris\Desserts;
use App\Teavel\Emails\Adventures\Paris\ThirdBistrot;
use App\Teavel\Emails\Adventures\Paris\MaisonSota;
use App\Teavel\Emails\Adventures\Paris\LastEmail;
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
        $this->email(FromMilanoToParis::class);
        return Wait::for("24 hours")->then('day1');
    }

    public function day1()
    {
        //Tuesday
        $this->email(PetitParis::class);
        return Wait::until("09.04.2025 17:30")->then('day2');
    }

    public function day2()
    {
        //Wednesday
        $this->email(Bistronomie::class);
        return Wait::for("24 hours")->then('day3');
    }

    public function day3()
    {
        //Thursday
        $this->email(Testimonial::class);
        return Wait::for("24 hours")->then('day4');
    }

    public function day4()
    {
        //Friday
        $this->email(FirstBistrot::class);
        return Wait::until("12.04.2025 16:30")->precise()->then(step: 'day5');
    }

    public function day5()
    {
        //Sunday
        $this->email(BarAVin::class);
        return Wait::for("27 hours")->precise()->then( 'day6');
    }

    public function day6()
    {
        //Monday
        $this->email(SecondBistrot::class);
        return Wait::for("24 hours")->precise()->then('day7');
    }

    public function day7()
    {
        //Tuesday
        $this->email(Desserts::class);
        return Wait::for("44 hours")->precise()->then('day8');
    }

    public function day8()
    {
        //Friday
        $this->email(ThirdBistrot::class);
        return Wait::until("21.04.2025 20:00")->then('day9');
    }
    
    public function day9()
    {
        //Tuesday
        $this->email(MaisonSota::class);
        return Wait::for("48 hours")->then('day9');
    }

    public function day10()
    {
        //Saturday
        $this->email(LastEmail::class);
    }
}

