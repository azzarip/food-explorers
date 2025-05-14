<?php

namespace App\Teavel\Goals\Forms;

use Azzarip\Teavel\Automations\FormAutomation;
use App\Teavel\Sequences;
use App\Teavel\Sequences\GeneralInterestSequence;

class GeneralInterestGoal extends FormAutomation
{
    protected array $start = [
        GeneralInterestSequence::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
