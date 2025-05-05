<?php

namespace App\Teavel\Sequences\Adventures\Paris;

use App\Teavel\Emails\Adventures\Paris\Bistronomie;
use App\Teavel\Emails\Adventures\Paris\Desserts;
use App\Teavel\Emails\Adventures\Paris\FirstBistrot;
use Carbon\Carbon;
use Azzarip\Teavel\Automations\Wait;
use App\Teavel\Emails\Adventures\Paris\FirstEmail;
use Azzarip\Teavel\Automations\SequenceAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

class ParisInterest extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Adventures');
        $this->tag('Interested Petit Paris');
        $this->tag('Compiled Form Petit Paris');
        $this->owner->notify(new TelegramNotification('🇫🇷 Interested Paris', $this->contact));
 
        //Monday
        $this->email(FirstEmail::class);
        $carbon = Carbon::now()->addDay()->setTime(16, 30);
        return Wait::carbon($carbon)->then('day1');
    }

    public function day1() {
        //Tuesday
        $this->email(Bistronomie::class);
        return Wait::for('24 hours')->then('day2');
    }

    public function day2() {
        //Wednesday
        $this->email(FirstBistrot::class);
        return Wait::for('24 hours')->then('day3');
    }

    public function day3() {
        //Thursday
        $this->email(Desserts::class);
        return Wait::for('24 hours')->then('day4');
    }

    // Bistrot Menus

    // 2nd Bistrot

    // 3rd Bistrot

    //Hidden Gem

    // 

}
