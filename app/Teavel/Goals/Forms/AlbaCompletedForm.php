<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences\AlbaCompletedSequence;
use Azzarip\Teavel\Automations\FormAutomation;

class AlbaCompletedForm extends FormAutomation
{
    protected array $start = [
        AlbaCompletedSequence::class,
    ];

    protected array $stop = [
    ];
}
