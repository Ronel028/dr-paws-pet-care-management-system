<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentStatusReference extends Model
{
    use HasFactory;

    protected $table = 'appointment_status_references';

    protected $fillable = ['slug', 'name'];

    public function appointment_requests()
    {
        return $this->hasMany(AppointmentRequest::class, 'status_id', 'id');
    }
}
