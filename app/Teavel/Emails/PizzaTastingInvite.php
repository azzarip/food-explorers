<?php

namespace App\Teavel\Emails;

use Azzarip\Teavel\Automations\EmailAutomation;
use App\Teavel\Sequences;

class PizzaTastingInvite extends EmailAutomation
{
    protected $utm_campaign = 'pizza_tasting';

    protected $utm_content = '1mail';

    public function click() {
        return durl('/pizza-tasting', 'base', $this->getUtms());
    }
}
