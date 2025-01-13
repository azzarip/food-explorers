<?php

namespace App\Teavel\Sequences;

use App\Teavel\Emails\MilanoAnnouncement as EmailsMilanoAnnouncement;
use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class MilanoAnnouncement extends SequenceAutomation
{
    public function start()
    {
        return Wait::until('15.01.2025 19:07')
            ->then('sendAnnouncement')
            ->precise();
    }

    public function sendAnnouncement() {
        $this->email(EmailsMilanoAnnouncement::class);
    }
}
