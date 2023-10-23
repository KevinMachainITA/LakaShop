<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_items';

    protected $fillable = [
        'cart_id',
        'product_id',
        'quantity'
    ];

    //Define the relationship with the "users" table
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    //Define the relationship with the "users" table
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
