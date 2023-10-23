<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'order_date',
        'status',
        'shipping_address',
        'payment_method',
        'total',
    ];

    //Define the relationship with the "users" table
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Define the relationship with the "order_details" table
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
