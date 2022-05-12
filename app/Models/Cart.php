<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function produk()
    {
        return $this->belongsTo('App\Models\Produk', 'produks_id', 'id');
    }
}
