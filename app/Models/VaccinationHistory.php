<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationHistory extends Model
{
    use HasFactory;

    protected $table = 'vaccination_histories';

    protected $fillable = [
        'vaccination_date',
        'weight',
        'temperature',
        // 'against',
        'manufacturer_lot',
        'next_schedule',
        'is_settelled',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    public function immunizationReference()
    {
        return $this->belongsTo(ImmunizationReference::class, 'immunization_reference_id', 'id');
    }

    public function veterinarian()
    {
        return $this->belongsTo(Veterinarian::class, 'veterinarian_id', 'id');
    }
}
