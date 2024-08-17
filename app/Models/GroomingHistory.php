<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroomingHistory extends Model
{
    use HasFactory;

    protected $table = 'grooming_histories';

    protected $fillable = ['haircut'];

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id', 'id');
    }

    public function client()
    {
        return $this->hasOneThrough(Client::class, Pet::class, 'pet_id', 'id', 'pet_id', 'client_id');
    }
}
