<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = [
        'truck_id'
    ];

    public function truck()
    {
        return $this->belongsTo(Truck::class);
    }

    public function pallets()
    {
        return $this->hasMany(Pallets::class);
    }

}
