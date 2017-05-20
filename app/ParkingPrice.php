<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingPrice extends Model
{
    public function tradecentre(){
        return $this->belongsTo(Tradecentre::class,'tradecentre_id');
    }
}
