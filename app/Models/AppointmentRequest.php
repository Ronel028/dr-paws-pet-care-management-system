<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentRequest extends Model
{
    use HasFactory;

    protected $table = 'appointment_requests';

    protected $fillable = [
        'client_name',
        'ref_number',
        'contact_no',
        'email',
        'pet_name',
        'service',
        'appointment_date',
        'pet_info',
        'species',
        'pet_type',
        'breed',
        'sex',
        'birth_date',
        'address',
        'status_id'
    ];

    public function status()
    {
        return $this->belongsTo(AppointmentStatusReference::class, 'status_id', 'id');
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id', 'id');
    }
}
