<?php

namespace App\Teavel\Sequences\Adventures\Paris;

use Carbon\Carbon;
use Azzarip\Teavel\Automations\Wait;
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
 
        $this->email(FirstEmail::class)
        $carbon = Carbon::now()->addDay()->setTime(8, 00);
        return Wait::carbon($carbon)->then('day1');
    }
}
