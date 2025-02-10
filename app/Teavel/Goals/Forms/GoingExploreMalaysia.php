<?php

namespace App\Teavel\Goals\Forms;

use App\Teavel\Sequences;
use App\Teavel\Sequences\ExploreMalaysia;
use Azzarip\Teavel\Automations\FormAutomation;

class GoingExploreMalaysia extends FormAutomation
{
    protected array $start = [
        ExploreMalaysia::class,
    ];

    protected array $stop = [
        InterestedExploreMalaysia::class,
    ];
}
