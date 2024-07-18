<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    use HasFactory;

    public function DealerName(){
        return $this->belongsTo(Dealer::class,'dealer_id','id');
    }
}
