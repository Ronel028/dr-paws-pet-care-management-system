<?php

namespace App\Livewire\PetManagement;

use Livewire\Component;

class Index extends Component
{
    public $show = false;
    public function render()
    {
        return view('livewire.pet-management.index')->layout('layouts.app');
    }
}
