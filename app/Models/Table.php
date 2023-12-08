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
        return $this->belongsToMany(Hour::class, 'hour_table', 'table_id', 'hour_id')->withPivot('status');
    }
    public function hourTables()
    {
        return $this->hasMany(HourTable::class, 'table_id', 'id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'TableID');
    }
}
