<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences;
use App\Teavel\Sequences\Adventures\Paris\ParisInterest;
use Azzarip\Teavel\Automations\FormAutomation;

class ParisInterestForm extends FormAutomation
{
    protected array $start = [
        ParisInterest::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
