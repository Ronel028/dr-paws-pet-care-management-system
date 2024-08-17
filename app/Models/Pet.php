<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable = [
        'name',
        'client_id',
        'breed',
        'species',
        'birthdate',
        'sex',
        'markings',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function vaccinationHistories()
    {
        return $this->hasMany(VaccinationHistory::class, 'pet_id', 'id');
    }

    public function otherHistories()
    {
        return $this->hasMany(OtherHistory::class, 'pet_id', 'id');
    }

    public function groomingHistories()
    {
        return $this->hasMany(GroomingHistory::class, 'pet_id', 'id');
    }
}
