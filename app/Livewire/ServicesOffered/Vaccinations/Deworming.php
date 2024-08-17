<?php

namespace App\Livewire\ServicesOffered\Vaccinations;

use App\Models\DrugReference;
use App\Models\OtherHistory;
use App\Models\Pet;
use App\Models\Veterinarian;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\On;
use Livewire\Component;

class Deworming extends Component
{

    public $createModal = false;
    public $editModal = false;
    public $pets;
    public $veterinarians;
    public $drug_references;

    public $history_id;

    public $client_id;
    public $pet_id;
    public $veterinarian_id;
    public $drug_reference_id;
    public $weight;
    public $date_administered;

    public $editClientId;
    public $editPetId;
    public $editVeterinarianId;
    public $editDrugReferenceId;
    public $editWeight;
    public $editDateAdministered;

    public function mount()
    {
        $this->date_administered = Carbon::today();
        $this->veterinarians = Veterinarian::all();
        $this->drug_references = DrugReference::all();
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
                'date_administered' => $this->date_administered,
                'weight' => $this->weight,
                'veterinarian_id' => $this->veterinarian_id,
                'drug_reference_id' => $this->drug_reference_id
            ],
            [
                'pet_id' => 'required',
                'date_administered' => 'required',
                'weight' => 'required',
                'veterinarian_id' => 'required',
                'drug_reference_id' => 'required'
            ],
            [
                'pet_id.required' => 'Pet is required',
                'date_administered.required' => 'Date administered is required',
                'weight.required' => 'Weight is required',
                'veterinarian_id.required' => 'Veterinarian is required',
                'drug_reference_id.required' => 'Type is required'
            ],
            [
                'pet_id' => 'Pet'
            ]
        )->validate();

        try {

            $pet = Pet::find($this->pet_id);
            $drugReference = DrugReference::find($this->drug_reference_id);
            $veterinarian = Veterinarian::find($this->veterinarian_id);

            $vaccination_history = $pet->otherHistories()->create([
                'date_administered' => $validated['date_administered'],
                'weight' => $validated['weight'],
            ]);

            $vaccination_history->drugReference()->associate($drugReference);
            $vaccination_history->veterinarian()->associate($veterinarian);

            $vaccination_history->save();

            $this->resetModal();

            $this->dispatch('refreshDatatable');

            $this->dispatch('alert', title: 'Success', description: 'DW / HP / AM / ATF history created successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    public function resetModal()
    {
        $this->resetExcept('date_administered', 'veterinarians', 'drug_references');
    }

    #[On('open-modal')]
    public function openModal($id)
    {
        $this->resetModal();

        $this->editModal = true;

        $vaccination_history = OtherHistory::find($id);

        $this->history_id = $id;
        $this->pets = Pet::select(['id', 'name'])->where('client_id', $vaccination_history->pet->client_id)->get();
        $this->editPetId = $vaccination_history->pet->id;
        $this->editClientId = $vaccination_history->pet->client_id;
        $this->editDateAdministered = Carbon::parse($vaccination_history->date_administered)->format('Y-m-d');
        $this->editWeight = $vaccination_history->weight;
        $this->editDrugReferenceId = $vaccination_history->drug_reference_id;
        $this->editVeterinarianId = $vaccination_history->veterinarian->id;
    }

    public function update()
    {
        $validated = Validator::make(
            [
                'pet_id' => $this->editPetId,
                'date_administered' => $this->editDateAdministered,
                'weight' => $this->editWeight,
                'drug_reference_id' => $this->editDrugReferenceId,
                'veterinarian_id' => $this->editVeterinarianId
            ],
            [
                'pet_id' => 'required',
                'date_administered' => 'required',
                'weight' => 'required',
                'drug_reference_id' => 'required',
                'veterinarian_id' => 'required',
            ],
            [
                'pet_id.required' => 'Pet is required',
                'date_administered.required' => 'Date administered is required',
                'weight.required' => 'Weight is required',
                'drug_reference_id.required' => 'Type is required',
                'veterinarian_id.required' => 'Veterinarian is required',
            ],
            [
                'pet_id' => 'Pet'
            ]
        )->validate();

        try {

            $pet = Pet::find($this->editPetId);
            $drugReference = DrugReference::find($this->editDrugReferenceId);
            $veterinarian = Veterinarian::find($this->editVeterinarianId);

            $history = OtherHistory::find($this->history_id);

            $history->update([
                'date_administered' => $validated['date_administered'],
                'weight' => $validated['weight'],
            ]);

            $history->drugReference()->associate($drugReference);
            $history->veterinarian()->associate($veterinarian);

            $history->save();

            $this->resetModal();

            $this->dispatch('refreshDatatable');

            $this->dispatch('alert', title: 'Success', description: 'DW / HP / AM / ATF history updated successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    public function render()
    {
        return view('livewire.services-offered.vaccinations.deworming')->layout('layouts.app');
    }
}
