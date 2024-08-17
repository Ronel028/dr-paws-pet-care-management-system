<?php

namespace App\Livewire\RecordManagement\PetInformation;

use App\Models\Client;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public $show = false;
    public $name;
    public $breed;
    public $species;
    public $birthdate;
    public $sex;
    public $markings;
    public $client;

    // Edit Modal
    public $editModal = false;
    public $pet_id;
    public $editName;
    public $editBreed;
    public $editSpecies;
    public $editBirthdate;
    public $editSex;
    public $editMarkings;
    public $editClient;


    public function resetModal()
    {
        $this->reset();
    }

    public function save()
    {
        $validated = Validator::make(
            [
                'name' => $this->name,
                'breed' => $this->breed,
                'species' => $this->species,
                'birthdate' => $this->birthdate,
                'sex' => $this->sex,
                'markings' => $this->markings,
                'client' => $this->client
            ],
            [
                'name' => ['required'],
                'breed' => ['required'],
                'species' => ['required'],
                'birthdate' => ['required'],
                'sex' => ['required'],
                'markings' => ['required'],
                'client' => ['required']
            ],
            [
                'name.required' => 'Name is required',
                'breed.required' => 'Breed is required',
                'species.required' => 'Species is required',
                'birthdate.required' => 'Birthdate is required',
                'sex.required' => 'Sex is required',
                'markings.required' => 'Markings is required',
                'client.required' => 'Owner is required'
            ],
            [
                'name' => 'Name',
                'breed' => 'Breed',
                'species' => 'Species',
                'birthdate' => 'Birthdate',
                'sex' => 'Sex',
                'markings' => 'Markings',
                'client' => 'Owner'
            ]
        )->validate();

        try {
            // Pet::create($validated);
            $client = Client::find($this->client);
            $client->pets()->create($validated);
            $this->reset();

            $this->dispatch('refreshDatatable');

            $this->dispatch('alert', title: 'Success', description: 'Pet created successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    #[On('open-modal')]
    public function openModal($id)
    {
        $this->reset();

        $pet = Pet::find($id);

        $this->pet_id = $id;
        $this->editName = $pet->name;
        $this->editBreed = $pet->breed;
        $this->editSpecies = $pet->species;
        $this->editBirthdate = $pet->birthdate;
        $this->editSex = $pet->sex;
        $this->editMarkings = $pet->markings;
        $this->editClient = $pet->client->id;

        $this->editModal = true;
    }

    public function update()
    {
        $validated = Validator::make(
            [
                'name' => $this->editName,
                'breed' => $this->editBreed,
                'species' => $this->editSpecies,
                'birthdate' => $this->editBirthdate,
                'sex' => $this->editSex,
                'markings' => $this->editMarkings,
                'client' => $this->editClient
            ],
            [
                'name' => ['required'],
                'breed' => ['required'],
                'species' => ['required'],
                'birthdate' => ['required'],
                'sex' => ['required'],
                'markings' => ['required'],
                'client' => ['required']
            ],
            [
                'name.required' => 'Name is required',
                'breed.required' => 'Breed is required',
                'species.required' => 'Species is required',
                'birthdate.required' => 'Birthdate is required',
                'sex.required' => 'Sex is required',
                'markings.required' => 'Markings is required',
                'client.required' => 'Owner is required'
            ],
            [
                'name' => 'Name',
                'breed' => 'Breed',
                'species' => 'Species',
                'birthdate' => 'Birthdate',
                'sex' => 'Sex',
                'markings' => 'Markings',
                'client' => 'Owner'
            ]
        )->validate();

        try {
            // Pet::create($validated);
            $pet = Pet::find($this->pet_id);
            $pet->update($validated);

            $client = Client::find($this->editClient);
            $pet->client()->associate($client);
            $pet->save();

            $this->reset();

            $this->dispatch('refreshDatatable');

            $this->dispatch('alert', title: 'Success', description: 'Pet created successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }
    public function render()
    {
        return view('livewire.record-management.pet-information.index')->layout('layouts.app');
    }
}
