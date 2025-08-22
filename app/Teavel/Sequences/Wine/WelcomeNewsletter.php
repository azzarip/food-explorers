<?php

namespace App\Teavel\Sequences\Wine;

use App\Notifications\TelegramNotification;
use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class WelcomeNewsletter extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Started Wine Newsletter');
        $this->tag('Wine Newsletter');
        $this->tag('Likes Wine');

        $this->owner()->notify(new TelegramNotification('🍷 New Wine Subscriber', $this->contact));
    }
}
