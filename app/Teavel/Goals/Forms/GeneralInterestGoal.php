<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences;
use App\Teavel\Sequences\GeneralInterestSequence;
use Azzarip\Teavel\Automations\FormAutomation;

class GeneralInterestGoal extends FormAutomation
{
    protected array $start = [
        GeneralInterestSequence::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
