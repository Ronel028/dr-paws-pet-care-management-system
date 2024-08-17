<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarian extends Model
{
    use HasFactory;

    protected $table = 'veterinarians';

    protected $fillable = [
        'name',
        'license_no',
    ];

    public function vaccinationHistories()
    {
        return $this->hasMany(VaccinationHistory::class, 'veterinarian_id', 'id');
    }

    public function otherHistories()
    {
        return $this->hasMany(OtherHistory::class, 'veterinarian_id', 'id');
    }
}
