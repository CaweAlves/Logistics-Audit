<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pallet extends Model
{
    use HasFactory;


    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
