<?php

namespace App\Livewire\Pos;

use Livewire\Component;

class PosTerminal extends Component
{
    public $show = false;

    public function resetModal()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.pos.pos-terminal')->layout('layouts.landing-page');
    }
}
