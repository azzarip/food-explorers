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
        $this->email(\App\Teavel\Emails\PriorityMilano::class);
        $this->owner()->notify(new TelegramNotification('Interested Milano', $this->contact));

    }
}
