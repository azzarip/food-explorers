<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences\OmakaseInterestedSequence;
use Azzarip\Teavel\Automations\FormAutomation;

class OmakaseInterested extends FormAutomation
{
    protected array $start = [
        OmakaseInterestedSequence::class
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
