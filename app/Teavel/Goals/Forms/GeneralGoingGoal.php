<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences\GeneralGoingSequence;
use App\Teavel\Sequences\GeneralInterestSequence;
use Azzarip\Teavel\Automations\FormAutomation;

class GeneralGoingGoal extends FormAutomation
{
    protected array $start = [
        GeneralGoingSequence::class,
    ];

    protected array $stop = [
        GeneralInterestSequence::class,
    ];
}
