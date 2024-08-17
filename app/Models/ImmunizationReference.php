<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImmunizationReference extends Model
{
    use HasFactory;

    public $table = 'immunization_references';
    public function vaccinationHistory()
    {
        return $this->hasOne(VaccinationHistory::class,'immunization_id','id');

    }
}
