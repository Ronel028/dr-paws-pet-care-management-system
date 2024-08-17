<?php

namespace App\Livewire\LandingPage;

use App\Models\AppointmentRequest;
use App\Models\Inquiry;
use App\Notifications\AppointmentNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    public $contactus_name;
    public $contactus_email;
    public $contactus_subject;
    public $contactus_message;

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
    public $ref_number;
    public $breed;
    public $sex;
    public $birth_date;

    public function mount()
    {
        $this->requestAppointmentDate = Carbon::today()->addDay();
    }

    public function createRequest()
    {
        $validated = Validator::make(
            [
                'requestName' => $this->requestName,
                'requestEmail' => $this->requestEmail,
                'requestContactNo' => $this->requestContactNo,
                'requestPetName' => $this->requestPetName,
                'requestService' => $this->requestService,
                'requestAppointmentDate' => $this->requestAppointmentDate,
                'requestAddress' => $this->requestAddress,
                'birth_date' => $this->birth_date,
            ],
            [
                'requestName' => 'required',
                'requestEmail' => 'required|email',
                'requestContactNo' => 'required',
                'requestPetName' => 'required',
                'requestService' => 'required',
                'requestAppointmentDate' => 'required',
                'requestAddress' => 'required',
                'birth_date' => 'required',
            ],
            [],
            [
                'requestName' => 'Name',
                'requestEmail' => 'Email',
                'requestContactNo' => 'Contact Number',
                'requestPetName' => 'Pet Name',
                'requestService' => 'Service',
                'requestAppointmentDate' => 'Appointment Date',
                'requestAddress' => 'Address',
            ]
        )->validate();

        try {
            $request = AppointmentRequest::create([
                'client_name' => $this->requestName,
                'contact_no' => $this->requestContactNo,
                'email' => $this->requestEmail,
                'pet_name' => $this->requestPetName,
                'service' => $this->requestService,
                'appointment_date' => Carbon::parse($this->requestAppointmentDate)->format('Y-m-d'),
                'pet_info' => $this->requestPetInfo,
                'address' => $this->requestAddress,
                'species' => $this->species,
                'pet_type' => $this->pet_type,
                'breed' => $this->breed,
                'sex' => $this->sex,
                'ref_number' => Str::random(10),
                'birth_date' => $this->birth_date,
                'status_id' => 1,
            ]);

            if ($request) {
                Mail::to($this->requestEmail)->send(new AppointmentNotification($this->requestName, $request->ref_number, $this->requestContactNo, $this->requestEmail, $this->requestPetName, $this->requestService, $request->appointment_date));
                $this->reset();
                $this->dispatch('alert', title: 'Success', description: 'Appointment request created successfully. We will get back to you soon.', icon: 'success');
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
            $this->dispatch('alert', title: 'Error', description: 'An error occured. Please try again.', icon: 'error');
        }
    }

    public function inquire()
    {
        $validated = Validator::make(
            [
                'contactus_name' => $this->contactus_name,
                'contactus_email' => $this->contactus_email,
                'contactus_subject' => $this->contactus_subject,
                'contactus_message' => $this->contactus_message
            ],
            [
                'contactus_name' => 'required',
                'contactus_email' => 'required|email',
                'contactus_subject' => 'required',
                'contactus_message' => 'required'
            ],
            attributes: [
                'contactus_name' => 'Name',
                'contactus_email' => 'Email',
                'contactus_subject' => 'Subject',
                'contactus_message' => 'Message'
            ]
        )->validate();

        try {

            $inquiry = Inquiry::create([
                'name' => $this->contactus_name,
                'email' => $this->contactus_email,
                'subject' => $this->contactus_subject,
                'message' => $this->contactus_message
            ]);

            if ($inquiry) {
                $this->contactus_name = null;
                $this->contactus_email = null;
                $this->contactus_subject = null;
                $this->contactus_message = null;
                $this->dispatch('alert', title: 'Inquiry sent!', icon: 'success',  description: 'Thank you for your inquiry. We will be in touch.');
            }
        } catch (\Throwable $th) {

            $this->dispatch('alert', title: 'Error!', icon: 'error',  description: 'An error occurred. Please try again.');
        }
    }
    public function render()
    {
        return view('livewire.landing-page.index')->layout('layouts.landing-page');
    }
}
