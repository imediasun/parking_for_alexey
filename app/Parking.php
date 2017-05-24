<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parking';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'client_id',
        'parking_price_id',
        'check_in_time',
        'check_out_time',
        'on_parking',
        'cost',
    ];

    /**
     * Ads of Parking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function ads()
    {
        return $this->belongsToMany(Adv::class, 'parking_adv', 'parking_id', 'adv_id');
    }
}
