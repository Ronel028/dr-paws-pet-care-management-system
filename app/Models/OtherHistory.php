<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherHistory extends Model
{
    use HasFactory;

    protected $table = 'other_histories';

    protected $fillable = [
        'date_administered',
        'weight',
        // 'description',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    public function drugReference()
    {
        return $this->belongsTo(DrugReference::class, 'drug_reference_id', 'id');
    }
    public function veterinarian()
    {
        return $this->belongsTo(Veterinarian::class, 'veterinarian_id', 'id');
    }
}
