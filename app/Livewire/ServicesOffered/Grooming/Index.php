<?php

namespace App\Livewire\ServicesOffered\Grooming;

use App\Models\GroomingHistory;
use App\Models\Pet;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public $addModal = false;
    public $pets;
    public $client_id;
    public $pet_id;
    public $haircut;

    // Edit Modal
    public $editModal = false;
    public $grooming_id;
    public $editClientId;
    public $editPetId;
    public $editHaircut;

    public function resetModal()
    {
        $this->reset();
    }

    public function updated($property)
    {
        if ($property == 'client_id') {
            $this->pets = Pet::select(['id', 'name'])->where('client_id', $this->client_id)->get();
        }
    }

    public function create()
    {
        $validated = Validator::make(
            [
                'pet_id' => $this->pet_id,
                'haircut' => $this->haircut
            ],
            [
                'pet_id' => 'required',
                'haircut' => 'required'
            ],
            [
                'pet_id.required' => 'Pet is required',
                'haircut.required' => 'Haircut is required'
            ],
            [
                'pet_id' => 'Pet',
                'haircut' => 'Haircut'
            ]
        )->validate();

        try {

            $pet = Pet::find($this->pet_id);
            $pet->groomingHistories()->create([
                'haircut' => $this->haircut
            ]);

            $this->resetModal();

            $this->dispatch('refreshDatatable');

            $this->dispatch('alert', title: 'Success', description: 'Grooming history created successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    #[On('open-modal')]
    public function openModal($id)
    {
        $this->reset();

        $this->editModal = true;

        $grooming = GroomingHistory::find($id);

        $this->pets = Pet::select(['id', 'name'])->where('client_id', $grooming->pet->client_id)->get();
        $this->editClientId = $grooming->pet->client_id;
        $this->editPetId = $grooming->pet_id;
        $this->editHaircut = $grooming->haircut;
        $this->grooming_id = $id;
    }

    public function update()
    {
        $validated = Validator::make(
            [
                'pet_id' => $this->editPetId,
                'haircut' => $this->editHaircut
            ],
            [
                'pet_id' => 'required',
                'haircut' => 'required'
            ],
            [
                'pet_id.required' => 'Pet is required',
                'haircut.required' => 'Haircut is required'
            ],
            [
                'pet_id' => 'Pet',
                'haircut' => 'Haircut'
            ]
        )->validate();

        try {

            $grooming = GroomingHistory::find($this->grooming_id);
            $grooming->update([
                'haircut' => $this->haircut
            ]);

            $this->resetModal();

            $this->dispatch('refreshDatatable');

            $this->dispatch('alert', title: 'Success', description: 'Grooming history updated successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    public function render()
    {
        return view('livewire.services-offered.grooming.index')->layout('layouts.app');
    }
}
