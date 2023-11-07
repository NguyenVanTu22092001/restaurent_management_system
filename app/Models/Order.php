<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['total_amount', 'reservation_id'];
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
}
