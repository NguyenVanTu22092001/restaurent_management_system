<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'guest_number'];
    public function hours()
    {
        return $this->belongsToMany(Hour::class, 'hour_table')->withPivot('status');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'TableID');
    }
}
