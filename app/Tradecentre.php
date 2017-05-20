<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tradecentre extends Model
{
    //
    public function users(){
        return $this->belongsTo('App\User','user_id');
    }

    public function parkingPrices()
    {
        return $this->hasMany(ParkingPrice::class);
    }
}
