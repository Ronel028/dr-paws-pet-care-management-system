<?php

namespace App\Livewire\Inquiries;

use App\Models\Inquiry;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{

    public $name;
    public $email;
    public $subject;
    public $message;
    public $viewModal = false;

    #[On('open-modal')]
    public function openModal($id)
    {
        $this->resetModal();

        $inquiry = Inquiry::find($id);

        $this->name = $inquiry->name;
        $this->email = $inquiry->email;
        $this->subject = $inquiry->subject;
        $this->message = $inquiry->message;

        $inquiry->is_opened = true;
        $inquiry->save();

        $this->viewModal = true;

        $this->dispatch('refreshDatatable');
    }

    public function resetModal()
    {
        $this->reset();
    }
    public function render()
    {
        return view('livewire.inquiries.index')->layout('layouts.app');
    }
}
