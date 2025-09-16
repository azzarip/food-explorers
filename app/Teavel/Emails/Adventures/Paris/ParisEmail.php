<?php

namespace App\Teavel\Emails\Adventures\Paris;

use App\Models\User;
use Azzarip\Teavel\Automations\EmailAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

class ParisEmail extends EmailAutomation
{
    protected $utm_campaign = 'interest';

    public function lp()
    {
        $this->stopParentSequence();
        $this->contact->tag('Paris Read Program');

        return durl('/petit-paris', 'base', $this->getUtms());
    }

    public function cancel()
    {
        $this->stopParentSequence();
        defer(User::first()->notify(new TelegramNotification('❌ No Petit Paris', $this->contact)));

        return durl('/gb/petit-paris', 'base', $this->getUtms());
    }
}
