<?php

namespace App\Livewire\ServicesOffered\Vaccinations;

use App\Models\ImmunizationReference;
use App\Models\Pet;
use App\Models\VaccinationHistory;
use App\Models\Veterinarian;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{
    public $pets;
    public $veterinarians;

    public $show = false;
    public $createModal = false;
    public $client_id;
    public $pet_id;
    public $vaccination_date;
    public $weight;
    public $temperature;
    public $immunization_reference_id;
    public $manufacturer_lot;
    public $veterinarian_id;
    public $next_schedule_date;

    // Edit Modal
    public $editModal = false;
    public $vaccination_id;
    public $editClientId;
    public $editPetId;
    public $editVaccinationDate;
    public $editWeight;
    public $editTemperature;
    public $editImmunizationReferenceId;
    public $editManufacturerLot;
    public $editVeterinarianId;
    public $editNextScheduleDate;

    public function mount()
    {
        $this->vaccination_date = today();
        $this->veterinarians = Veterinarian::all();
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
                'vaccination_date' => $this->vaccination_date,
                'weight' => $this->weight,
                'temperature' => $this->temperature,
                'immunization_reference_id' => $this->immunization_reference_id,
                'manufacturer_lot' => $this->manufacturer_lot,
                'veterinarian_id' => $this->veterinarian_id,
                'next_schedule_date' => $this->next_schedule_date,
            ],
            [
                'pet_id' => 'required',
                'vaccination_date' => 'required',
                'weight' => 'required',
                'temperature' => 'required',
                'immunization_reference_id' => 'required',
                'manufacturer_lot' => 'required',
                'veterinarian_id' => 'required',
                'next_schedule_date' => 'required',
            ],
            [
                'pet_id.required' => 'Pet is required',
                'vaccination_date.required' => 'Vaccination date is required',
                'immunization_reference_id.required' => 'Immunization is required',
                'manufacturer_lot.required' => 'Manufacturer / Lot is required',
                'veterinarian_id.required' => 'Veterinarian is required',
                'next_schedule_date.required' => 'Next schedule date is required',
            ],
            [
                'pet_id' => 'Pet',
                'vaccination_date' => 'Vaccination date',
                'immunization_reference_id' => 'Immunization',
                'manufacturer_lot' => 'Manufacturer / Lot',
                'veterinarian_id' => 'Veterinarian',
                'next_schedule_date' => 'Next schedule date',
            ]
        )->validate();

        try {

            $pet = Pet::find($this->pet_id);
            $immunization = ImmunizationReference::find($this->immunization_reference_id);
            $veterinarian = Veterinarian::find($this->veterinarian_id);
            $vaccination_history = $pet->vaccinationHistories()->create([
                'vaccination_date' => $validated['vaccination_date'],
                'weight' => $validated['weight'],
                'temperature' => $validated['temperature'],
                'manufacturer_lot' => $validated['manufacturer_lot'],
                'next_schedule' => $validated['next_schedule_date'],
            ]);

            $vaccination_history->immunizationReference()->associate($immunization);
            $vaccination_history->veterinarian()->associate($veterinarian);

            $vaccination_history->save();

            $this->resetModal();

            $this->dispatch('refreshDatatable');

            $this->dispatch('alert', title: 'Success', description: 'Vaccination history created successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    public function resetModal()
    {
        $this->resetExcept(['veterinarians']);
    }

    #[On('open-modal')]
    public function openModal($id)
    {
        $this->resetExcept(['veterinarians']);

        $this->editModal = true;

        $vaccination_history = VaccinationHistory::find($id);

        $this->vaccination_id = $id;
        $this->pets = Pet::select(['id', 'name'])->where('client_id', $vaccination_history->pet->client_id)->get();
        $this->editPetId = $vaccination_history->pet->id;
        $this->editClientId = $vaccination_history->pet->client_id;
        $this->editVaccinationDate = Carbon::parse($vaccination_history->vaccination_date)->format('Y-m-d');
        $this->editWeight = $vaccination_history->weight;
        $this->editTemperature = $vaccination_history->temperature;
        $this->editImmunizationReferenceId = $vaccination_history->immunizationReference->id;
        $this->editManufacturerLot = $vaccination_history->manufacturer_lot;
        $this->editNextScheduleDate = Carbon::parse($vaccination_history->next_schedule)->format('Y-m-d');
        $this->editVeterinarianId = $vaccination_history->veterinarian->id;
    }

    public function update()
    {
        $validated = Validator::make(
            [
                'pet_id' => $this->editPetId,
                'vaccination_date' => $this->editVaccinationDate,
                'weight' => $this->editWeight,
                'temperature' => $this->editTemperature,
                'immunization_reference_id' => $this->editImmunizationReferenceId,
                'manufacturer_lot' => $this->editManufacturerLot,
                'veterinarian_id' => $this->editVeterinarianId,
                'next_schedule_date' => $this->editNextScheduleDate,
            ],
            [
                'pet_id' => 'required',
                'vaccination_date' => 'required',
                'weight' => 'required',
                'temperature' => 'required',
                'immunization_reference_id' => 'required',
                'manufacturer_lot' => 'required',
                'veterinarian_id' => 'required',
                'next_schedule_date' => 'required',
            ],
            [
                'pet_id.required' => 'Pet is required',
                'vaccination_date.required' => 'Vaccination date is required',
                'immunization_reference_id.required' => 'Immunization is required',
                'manufacturer_lot.required' => 'Manufacturer / Lot is required',
                'veterinarian_id.required' => 'Veterinarian is required',
                'next_schedule_date.required' => 'Next schedule date is required',
            ],
            [
                'pet_id' => 'Pet',
                'vaccination_date' => 'Vaccination date',
                'immunization_reference_id' => 'Immunization',
                'manufacturer_lot' => 'Manufacturer / Lot',
                'veterinarian_id' => 'Veterinarian',
                'next_schedule_date' => 'Next schedule date',
            ]
        )->validate();

        try {

            $pet = Pet::find($this->editPetId);
            $immunization = ImmunizationReference::find($this->editImmunizationReferenceId);
            $veterinarian = Veterinarian::find($this->editVeterinarianId);

            $history = VaccinationHistory::find($this->vaccination_id);
            $vaccination_history = $history->update([
                'vaccination_date' => $validated['vaccination_date'],
                'weight' => $validated['weight'],
                'temperature' => $validated['temperature'],
                'manufacturer_lot' => $validated['manufacturer_lot'],
                'next_schedule' => $validated['next_schedule_date'],
            ]);

            $history->pet()->associate($pet);
            $history->immunizationReference()->associate($immunization);
            $history->veterinarian()->associate($veterinarian);

            $history->save();

            $this->resetModal();

            $this->dispatch('refreshDatatable');

            $this->dispatch('alert', title: 'Success', description: 'Vaccination history updated successfully', icon: 'success');
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }
    public function render()
    {
        $immunization_references = ImmunizationReference::all();
        return view('livewire.services-offered.vaccinations.index', compact('immunization_references'))->layout('layouts.app');
    }
}
