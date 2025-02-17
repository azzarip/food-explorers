<?php

namespace App\Teavel\Goals\Forms;

use Azzarip\Teavel\Automations\FormAutomation;
use App\Teavel\Sequences;
use App\Teavel\Sequences\WelcomeSequence;

class Registration extends FormAutomation
{
    protected array $start = [
        WelcomeSequence::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
