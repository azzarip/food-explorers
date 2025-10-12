<?php

namespace App\Teavel\Sequences\Wine;


use Azzarip\Teavel\Automations\SequenceAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

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
