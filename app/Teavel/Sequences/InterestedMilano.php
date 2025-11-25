<?php

namespace App\Teavel\Sequences;

use Carbon\Carbon;
use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

class InterestedMilano extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Interested Milano');

        if (Carbon::now()->lt(Carbon::create(2025, 11, 27))) {
            $this->tag('Cashback Omakase');
            $this->email(\App\Teavel\Emails\InterestedMilano::class);
        } else {
            $this->email(\App\Teavel\Emails\PriorityMilano::class);
        }
        $this->owner()->notify(new TelegramNotification('Interested Milano', $this->contact));

    }
}
