<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences;
use App\Teavel\Sequences\WelcomeSequence;
use Azzarip\Teavel\Automations\FormAutomation;

class Registration extends FormAutomation
{
    protected array $start = [
        WelcomeSequence::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
