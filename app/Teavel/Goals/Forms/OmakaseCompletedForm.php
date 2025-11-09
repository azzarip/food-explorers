<?php

namespace App\Teavel\Goals\Forms;

use Azzarip\Teavel\Automations\FormAutomation;
use App\Teavel\Sequences;
use App\Teavel\Sequences\OmakaseCompletedSequence;

class OmakaseCompletedForm extends FormAutomation
{
    protected array $start = [
        OmakaseCompletedSequence::class
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
