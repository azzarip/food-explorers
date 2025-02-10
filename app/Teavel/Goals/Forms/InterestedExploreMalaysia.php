<?php

namespace App\Teavel\Goals\Forms;

use Azzarip\Teavel\Automations\FormAutomation;
use App\Teavel\Sequences;
use App\Teavel\Sequences\InterestedExploreMalaysia as InterestSequence;

class InterestedExploreMalaysia extends FormAutomation
{
    protected array $start = [
        InterestSequence::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
