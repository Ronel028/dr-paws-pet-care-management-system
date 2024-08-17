<?php

namespace App\Livewire\AppointmentManagement;

use App\Models\Appointment;
use App\Models\AppointmentRequest;
use App\Models\AppointmentStatusReference;
use App\Models\Client;
use App\Models\Pet;
use Livewire\Attributes\On;
use Livewire\Component;

class AppointmentRequests extends Component
{

    public $requestName;
    public $requestEmail;
    public $requestContactNo;
    public $requestPetName;
    public $requestService;
    public $requestAppointmentDate;
    public $requestPetInfo;
    public $requestAddress;
    public $species;
    public $pet_type;
    public $breed;
    public $sex;
    public $birth_date;
    public $status_id;
    public $ref_number;

    public $show = false;
    public $client_id;
    public $editModal = false;

    public function resetModal()
    {
        $this->reset();
    }

    #[On('open-modal')]
    public function openModal($id)
    {
        try {
            $this->editModal = true;
            $this->client_id = $id;
            $appointment_request = AppointmentRequest::find($id);
            $this->requestName = $appointment_request->client_name;
            $this->requestEmail = $appointment_request->contact_no;
            $this->requestContactNo = $appointment_request->email;
            $this->requestPetName = $appointment_request->pet_name;
            $this->requestService = $appointment_request->service;
            $this->requestAppointmentDate = $appointment_request->appointment_date;
            $this->requestPetInfo = $appointment_request->pet_info;
            $this->requestAddress = $appointment_request->address;
            $this->species = $appointment_request->species;
            $this->pet_type = $appointment_request->pet_type;
            $this->breed = $appointment_request->breed;
            $this->sex = $appointment_request->sex;
            $this->ref_number = $appointment_request->ref_number;
            $this->birth_date = $appointment_request->birth_date;
            $this->status_id = $appointment_request->status_id;
        } catch (\Throwable $th) {
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }

    public function approvedRequest()
    {
        try {
            $datas = AppointmentRequest::find($this->client_id);
            $datas->status_id = $this->status_id;
            $datas->save();

            if ($this->status_id == 2 || $this->status_id == 3) {
                $clientss = Client::create([
                    'name' => $this->requestName,
                    'contact_no' => $this->requestContactNo,
                    'address' => $this->requestAddress,
                ]);

                $pet = Pet::create([
                    'name' => $this->requestPetName,
                    'species' => $this->species,
                    'pet_type' => $this->pet_type,
                    'breed' => $this->breed,
                    'sex' => $this->sex,
                    'birth_date' => $this->birth_date,
                    'markings' => $this->requestPetInfo,
                    'client_id' => $clientss->id,
                ]);
                Appointment::create([
                    'client_id' => $clientss->id,
                    'pet_id' => $pet->id,
                    'service' => $this->requestService,
                    'ref_number' => $this->ref_number,
                    'appointment_date_time' => $this->requestAppointmentDate,
                    'status_id' => $this->status_id,
                    'user_id' => auth()->user()->id
                ]);
            }

            $this->reset();
            $this->dispatch('refreshDatatable');
            $this->dispatch('alert', title: 'Success', description: 'Client updated successfully', icon: 'success');
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatch('alert', title: 'Error', description: $th->getMessage(), icon: 'error');
        }
    }
    public function render()
    {
        $statuses = AppointmentStatusReference::all();
        return view('livewire.appointment-management.appointment-requests', compact('statuses'))->layout('layouts.app');
    }
}
