<?php

namespace App\Livewire\Dashboard;

use App\Models\Appointment;
use App\Models\AppointmentRequest;
use App\Models\Client;
use App\Models\GroomingHistory;
use App\Models\Inquiry;
use App\Models\OtherHistory;
use App\Models\Pet;
use App\Models\VaccinationHistory;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $total_clients = Client::all()->count();
        $total_pets = Pet::all()->count();
        $total_groomings = GroomingHistory::all()->count();
        $total_vaccinations = VaccinationHistory::all()->count();
        $total_other_histories = OtherHistory::all()->count();
        $total_inquiries = Inquiry::all()->count();
        $total_appointments_today = Appointment::whereDate('appointment_date_time', Carbon::today())->count();
        $total_pending_appointment_requests = AppointmentRequest::withWhereHas('status', function ($query) {
            $query->where('id', 1);
        })->count();

        return view('livewire.dashboard.index')->with(compact(
            'total_clients',
            'total_pets',
            'total_groomings',
            'total_vaccinations',
            'total_other_histories',
            'total_appointments_today',
            'total_pending_appointment_requests',
            'total_inquiries'
        ))->layout('layouts.app');
    }
}
