<?php

namespace App\Teavel\Emails;

use Azzarip\Teavel\Automations\EmailAutomation;

class PizzaTastingInvite extends EmailAutomation
{
    protected $utm_campaign = 'pizza_tasting';

    protected $utm_content = '1mail';

    public function click()
    {
        return durl('/pizza-tasting', 'base', $this->getUtms());
    }
}
