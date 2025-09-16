<?php

namespace App\Teavel\Emails\Adventures\Paris;

use Azzarip\Teavel\Automations\EmailAutomation;

class LastEmail extends EmailAutomation
{
    protected $utm_campaign = 'petit_paris';

    protected $utm_content = 'last_email';

    public function click()
    {
        return durl('/petit-paris', 'base', $this->getUtms());
    }
}
