<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['UserID', 'TableID', 'ReservationDate', 'seats', 'name', 'ReservationTime', 'email', 'phone'];

    // Define relationships
    public function customer()
    {
        return $this->belongsTo(User::class, 'id', 'UserID');
    }

    public function table()
    {
        return $this->belongsTo(Table::class, 'TableID');
    }
}
