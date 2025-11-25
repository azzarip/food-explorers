<?php

namespace App\Teavel\Goals\Forms;

use Azzarip\Teavel\Automations\FormAutomation;
use App\Teavel\Sequences;

class InterestedMilano extends FormAutomation
{
    protected array $start = [
        Sequences\InterestedMilano::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
