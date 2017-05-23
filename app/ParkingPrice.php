<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkingPrice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parking_prices';

    public function tradecentre()
    {
        return $this->belongsTo(Tradecentre::class, 'tradecentre_id');
    }

    /**
     * Return price by R format
     * @return string
     */
    public function getPriceR()
    {
        if ($this->price == 0) {
            return 'R0';
        }

        return 'R' . rtrim($this->price, '.0');
    }
}
