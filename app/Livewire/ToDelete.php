<?php

namespace App\Livewire;

use Livewire\Component;

class ToDelete extends Component
{
    public int $value = 0;

    public function add() {
        $this->value++;
    }
    public function render()
    {
        return view('livewire.to-delete');
    }
}
