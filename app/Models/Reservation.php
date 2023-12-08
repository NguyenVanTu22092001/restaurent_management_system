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
    public function generateItemCode($productId, $dateTime)
    {
        // Extract the year, month, day, hour, and minute from the provided date and time
        $year = date('Y', strtotime($dateTime));
        $month = date('m', strtotime($dateTime));
        $day = date('d', strtotime($dateTime));
        $hour = date('H', strtotime($dateTime));
        $minute = date('i', strtotime($dateTime));

        // Create item code components
        $idComponent = 'I' . $productId;       // Example: I3
        $dateComponent = 'D' . $year . $month . $day; // Example: D20231102
        $timeComponent = 'T' . $hour . $minute;  // Example: T1140

        // Combine the components to form the final item code
        $itemCode = $idComponent . '-' . $dateComponent . '-' . $timeComponent;

        return $itemCode;
    }
}
