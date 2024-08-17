<?php

namespace App\Livewire\PetManagement\MedicalHistory;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.pet-management.medical-history.index')->layout('layouts.app');
    }
}
