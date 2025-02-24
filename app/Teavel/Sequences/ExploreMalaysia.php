<?php

namespace App\Teavel\Sequences;

use App\Notifications\TelegramNotification;
use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class ExploreMalaysia extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Going Explore Malaysia');
        $this->detag('Interested Explore Malaysia');
        $this->owner->notify(new TelegramNotification('Explore Malaysia', $this->contact));
    }
}
