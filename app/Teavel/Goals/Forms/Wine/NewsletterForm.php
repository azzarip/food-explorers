<?php

namespace App\Teavel\Goals\Forms\Wine;

use App\Teavel\Sequences;
use App\Teavel\Sequences\Wine\WelcomeNewsletter;
use Azzarip\Teavel\Automations\FormAutomation;

class NewsletterForm extends FormAutomation
{
    protected array $start = [
        WelcomeNewsletter::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
