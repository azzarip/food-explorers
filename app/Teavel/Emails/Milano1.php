<?php

namespace App\Teavel\Emails;

use Azzarip\Teavel\Automations\EmailAutomation;
use App\Teavel\Sequences;

class Milano1 extends EmailAutomation
{
    protected $utm_campaign = '';

    protected $utm_content = '';

    public function click() {
        return durl('/milano', 'base', $this->getUtms());
    }
}
