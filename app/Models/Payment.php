<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    
    public function voucher()
    {
        return $this->belongsTo('App\Models\Voucher', 'voucher_id', 'id');
    }
}
