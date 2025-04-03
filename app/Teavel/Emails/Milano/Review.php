<?php

namespace App\Teavel\Emails\Milano;

use Azzarip\Teavel\Automations\EmailAutomation;
use App\Teavel\Sequences;

class Review extends EmailAutomation
{
    protected $utm_campaign = '';

    protected $utm_content = '';

    public function click() {
        return 'https://docs.google.com/forms/d/e/1FAIpQLSe4_rh7oYqHWZRHvpyyue-EtuLpF6pA9hAwDbVgYQR7gFncqg/viewform?usp=sharing';
    }
}
