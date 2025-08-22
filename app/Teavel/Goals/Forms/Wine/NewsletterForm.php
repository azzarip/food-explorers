<?php

namespace App\Teavel\Goals\Forms\Wine;

use Azzarip\Teavel\Automations\FormAutomation;
use App\Teavel\Sequences;
use App\Teavel\Sequences\Wine\WelcomeNewsletter;

class NewsletterForm extends FormAutomation
{
    protected array $start = [
        WelcomeNewsletter::class
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
