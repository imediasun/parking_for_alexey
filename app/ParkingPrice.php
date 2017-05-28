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

    /**
     * @param $tradecentre_id
     * @param $check_in_time
     * @param $check_out_time
     * @return mixed
     */
    public function getPriceByTime($tradecentre_id, $check_in_time, $check_out_time)
    {
        $day = 1;//date('w', $check_in_time);

        $time1 = strtotime($check_in_time);
        $time2 = strtotime($check_out_time);
        $time = ($time2 - $time1) / 60 / 60;

        $obj = $this
            ->where($tradecentre_id, $tradecentre_id)
            ->where('day', $day)
            ->where('time', '<=', $time)
            ->first();

        return $obj->price;
    }
}
