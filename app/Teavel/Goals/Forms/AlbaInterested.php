<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences\AlbaInterestedSequence;
use Azzarip\Teavel\Automations\FormAutomation;

class AlbaInterested extends FormAutomation
{
    protected array $start = [
        AlbaInterestedSequence::class,
    ];

    protected array $stop = [
    ];
}
