<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Parking
 * @package App
 */
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
        'tradecentre_id',
        'check_in_time',
        'check_out_time',
        'on_parking',
        'cost',
    ];

    /**
     * Client of Parking
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

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
