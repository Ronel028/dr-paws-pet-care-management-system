<?php

namespace App\Livewire\AppointmentManagement;

use App\Models\AppointmentStatusReference;
use Livewire\Component;

class Index extends Component
{
    public $show = false;
    public function render()
    {
        $statuses = AppointmentStatusReference::all();
        return view('livewire.appointment-management.index', compact('statuses'))->layout('layouts.app');
    }
}
