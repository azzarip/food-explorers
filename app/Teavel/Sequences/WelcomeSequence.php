<?php

namespace App\Teavel\Sequences;

use App\Notifications\TelegramNotification;
use App\Teavel\Emails\WelcomeEmail;
use Azzarip\Teavel\Automations\SequenceAutomation;

class WelcomeSequence extends SequenceAutomation
{
    public function start()
    {
        $this->owner->notify(new TelegramNotification('🖊 *New Registration*', $this->contact));
        if ($this->contact->participatedEvents()->count() < 1) {
            $this->email(WelcomeEmail::class);
            $this->tag('Rookie');
        }
    }
}
