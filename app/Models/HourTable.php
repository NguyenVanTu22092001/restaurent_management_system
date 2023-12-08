<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HourTable extends Model
{
    use HasFactory;
    protected $table = 'hour_table'; // Assuming the table name is 'hour_table'

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id', 'id');
    }
}
