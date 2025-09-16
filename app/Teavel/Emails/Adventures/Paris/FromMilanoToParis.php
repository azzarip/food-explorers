<?php

namespace App\Teavel\Emails\Adventures\Paris;

use App\Models\User;
use Azzarip\Teavel\Automations\EmailAutomation;
use Azzarip\Teavel\Notifications\TelegramNotification;

class FromMilanoToParis extends EmailAutomation
{
    protected $utm_campaign = 'petit_paris';

    protected $utm_content = 'from_milano_to_paris';

    public function click()
    {
        return durl('/petit-paris', 'base', $this->getUtms());
    }

    public function cancel()
    {
        $this->stopParentSequence();
        User::first()->notify(new TelegramNotification('❌ No Petit Paris', $this->contact));

        return durl('/gb/petit-paris', 'base', $this->getUtms());
    }
}
