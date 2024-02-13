<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'cpf'
    ];

    public function trucks()
    {
        return $this->hasMany(Truck::class);
    }

}
