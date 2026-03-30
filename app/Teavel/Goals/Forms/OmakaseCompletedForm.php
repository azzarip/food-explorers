<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences\OmakaseCompletedSequence;
use Azzarip\Teavel\Automations\FormAutomation;

class OmakaseCompletedForm extends FormAutomation
{
    protected array $start = [
        OmakaseCompletedSequence::class
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
