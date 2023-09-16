<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'name',
        'address',
        'phone',
        'product_qty',
        'product_unit_price',
        'total_amount',
        'location',
        'grand_total_amount',
        'status',
    ];

    public function userData()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function productData()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
