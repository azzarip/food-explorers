<?php

namespace App\Teavel\Emails;

use App\Teavel\Sequences;
use Azzarip\Teavel\Automations\EmailAutomation;

class WelcomeEmail extends EmailAutomation
{
    protected $utm_campaign = '';

    protected $utm_content = '';

    public function click() {
        return durl('/events', 'my', $this->getUtms())->url();
    }
}
