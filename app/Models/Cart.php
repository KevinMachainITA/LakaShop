<?php

namespace App\Models;

use App\Models\User;
use App\Models\CartItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'user_id',
    ];

    //Define the relationship with the "users" table
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Define the relationship with the "cart_items" table
    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}
