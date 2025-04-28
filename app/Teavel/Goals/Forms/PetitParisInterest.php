<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences;
use Azzarip\Teavel\Automations\FormAutomation;
use App\Teavel\Sequences\Adventures\Paris\ParisInterest;

class PetitParisInterest extends FormAutomation
{
    protected array $start = [
        ParisInterest::class,
    ];

    protected array $stop = [
        // Add sequences to stop
    ];
}
