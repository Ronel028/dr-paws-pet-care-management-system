<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductTransaction extends Pivot
{
    use HasFactory;

    protected $table = 'product_transactions';

    protected $fillable = [
        'quantity',
        'price',
        'total',
        'is_returned'
    ];


}
