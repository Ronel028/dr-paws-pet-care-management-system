<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugReference extends Model
{
    use HasFactory;

    protected $table = 'drug_references';

    public function otherHistory()
    {
        return $this->hasOne(OtherHistory::class,'drug_reference_id','id');
    }
}
