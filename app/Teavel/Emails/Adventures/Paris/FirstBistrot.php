<?php

namespace App\Teavel\Emails\Adventures\Paris;

use Azzarip\Teavel\Automations\EmailAutomation;
use App\Teavel\Sequences;

class FirstBistrot extends EmailAutomation
{
    protected $utm_campaign = 'petit_paris';

    protected $utm_content = 'first_bistrot';

    public function click() {
        return durl('/petit-paris', 'base', $this->getUtms());
    }
}
