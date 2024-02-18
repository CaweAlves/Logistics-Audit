<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PalletProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pallet_id',
        'product_id',
        'quantity'
    ];

    public function pallet()
    {
        return $this->belongsTo(Pallet::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
