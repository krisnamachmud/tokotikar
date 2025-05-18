<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_number',
        'total_amount',
        'status',
        'nama',
        'email',
        'phone',
        'alamat',
        'payment_status',
        'snap_token'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}