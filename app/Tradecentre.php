<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tradecentre
 * @package App
 */
class Tradecentre extends Model
{
    /**
     * User of tradecentre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Prices of Parking
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parkingPrices()
    {
        return $this->hasMany(ParkingPrice::class);
    }
}
