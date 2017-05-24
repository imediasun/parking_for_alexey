<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * @var array  fields to save
     */
    protected $fillable = [
        'company_name',
        'first_name',
        'last_name',
        'street_house_number',
        'zip_code',
        'city',
        'different',
        'active',
        'install_street_house_number',
        'install_zip_code',
        'install_city',
        'email',
        'telephone',
        'reachability',
        'service',
        'comments',
        'comments_hidden',
    ];
}
