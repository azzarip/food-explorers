<?php

namespace App\Teavel\Goals\Forms;

use Azzarip\Teavel\Automations\FormAutomation;
use App\Teavel\Sequences;
use App\Teavel\Sequences\OmakaseInterestedSequence;

class OmakaseInterested extends FormAutomation
{
    protected array $start = [
        OmakaseInterestedSequence::class
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
