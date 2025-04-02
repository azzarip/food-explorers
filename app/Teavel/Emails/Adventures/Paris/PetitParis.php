<?php

namespace App\Teavel\Emails\Adventures\Paris;

use Azzarip\Teavel\Automations\EmailAutomation;
use App\Teavel\Sequences;

class PetitParis extends EmailAutomation
{
    protected $utm_campaign = 'petit_paris';

    protected $utm_content = 'petit_paris';

    public function click() {
        return durl('/petit-paris', 'base', $this->getUtms());
    }
}
