<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'clients';

    protected $fillable = [
        'name',
        'contact_no',
        'address',
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class, 'client_id', 'id');
    }
}
