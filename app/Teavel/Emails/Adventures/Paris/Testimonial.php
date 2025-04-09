<?php

namespace App\Teavel\Emails\Adventures\Paris;

use Azzarip\Teavel\Automations\EmailAutomation;
use App\Teavel\Sequences;

class Testimonial extends EmailAutomation
{
    protected $utm_campaign = 'petit_paris';

    protected $utm_content = 'testimonial';

    public function click() {
        return durl('/petit-paris#daniel', 'base', $this->getUtms());
    }
}
