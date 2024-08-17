<?php

namespace App\Livewire\RecordManagement\UserInformation;

use App\Models\Client;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{

    public $show = false;
    public $name;
    public $contact_no;
    public $address;

    // Edit Modal
    public $editModal = false;
    public $client_id;
    public $editName;
    public $editContactNo;
    public $editAddress;

    public function resetModal()
    {
        $this->reset();
    }
    public function save()
    {
        $validated = Validator::make(
            [
                'name' => $this->name,
                'contact_no' => $this->contact_no,
                'address' => $this->address
            ],
            [
                'name' => 'required',
                'contact_no' => 'required',
                'address' => 'required',
            ]
        )->validate();

        try {
            $client = Client::create($validated);

            $this->reset();
            $this->dispatch('refreshDatatable');
            $this->dispatch('alert', title: 'Success', description: 'Client created successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    #[On('open-modal')]
    public function openModal($id)
    {
        $this->reset();

        $this->editModal = true;

        $client = Client::find($id);

        $this->client_id = $client->id;
        $this->editName = $client->name;
        $this->editContactNo = $client->contact_no;
        $this->editAddress = $client->address;
    }

    public function update()
    {
        $validated = Validator::make(
            [
                'name' => $this->editName,
                'contact_no' => $this->editContactNo,
                'address' => $this->editAddress
            ],
            [
                'name' => 'required',
                'contact_no' => 'required',
                'address' => 'required',
            ],
            [
                'name.required' => 'Name is required',
                'contact_no.required' => 'Contact number is required',
                'address.required' => 'Address is required',
            ],
            [
                'name' => 'Name',
                'contact_no' => 'Contact number',
                'address' => 'Address',
            ]
        )->validate();

        try {
            $client = Client::find($this->client_id);
            $client->update($validated);
            $this->reset();
            $this->dispatch('refreshDatatable');
            $this->dispatch('alert', title: 'Success', description: 'Client updated successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    public function render()
    {
        return view('livewire.record-management.user-information.index')->layout('layouts.app');
    }
}
