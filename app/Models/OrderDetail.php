<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'product_price',
        'subtotal',
    ];

    //Define the relationship with the "orders" table
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
    //Define the relationship with the "products" table
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
