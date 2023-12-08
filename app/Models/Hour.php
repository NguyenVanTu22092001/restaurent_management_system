<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    use HasFactory;
    protected $fillable = ['res_hour'];
    public function tables()
    {
        return $this->belongsToMany(Table::class, 'hour_table', 'hour_id', 'table_id')->withPivot('status');
    }
}
