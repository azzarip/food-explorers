<?php

namespace App\Teavel\Sequences\Adventures\Paris;

use Azzarip\Teavel\Automations\Wait;
use Azzarip\Teavel\Automations\SequenceAutomation;

class ParisInterest extends SequenceAutomation
{
    public function start()
    {
        $this->tag('Adventures');
        $this->tag('Interested Petit Paris');
        $this->tag('Compiled Form Petit Paris');

        
    }
}
