<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adv extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'adv';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'title',
        'short_description',
        'large_description',
        'image_small',
        'image_medium',
        'image_large',
        'thumbnail',
    ];

    /**
     * Get the rubric that owns the article.
     */
    public function tradecentre()
    {
        return $this->belongsTo(Tradecentre::class);
    }

    /**
     * Parkings of Ad
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function parkings()
    {
        return $this->belongsToMany(Parking::class, 'parking_adv', 'adv_id', 'parking_id');
    }
}
