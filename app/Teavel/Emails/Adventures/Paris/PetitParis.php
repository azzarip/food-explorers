<?php

namespace App\Teavel\Emails\Adventures\Paris;

use Azzarip\Teavel\Automations\EmailAutomation;

class PetitParis extends EmailAutomation
{
    protected $utm_campaign = 'petit_paris';

    protected $utm_content = 'petit_paris';

    public function click()
    {
        return durl('/petit-paris', 'base', $this->getUtms());
    }
}
