<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'slug',
        'name',
        'barcode',
        'brand',
        'unit',
        'unit_price',
        'retail_price',
        'critical_stocks',
        'stocks',
        'is_active'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'product_transactions', 'product_id', 'transaction_id')->withPivot('quantity', 'price', 'total', 'is_returned')->withTimestamps()->using(ProductTransaction::class);
    }
}
