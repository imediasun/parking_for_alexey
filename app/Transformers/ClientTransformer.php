<?php

namespace App\Transformers;

use App\Client;
use League\Fractal\TransformerAbstract;

class ClientTransformer extends TransformerAbstract
{
    public function transform(Client $client)
    {
        return [
            'id'                  => (int)$client->id,
            'company_name'        => $client->company_name,
            'first_name'          => $client->first_name,
            'last_name'           => $client->last_name,
            'street_house_number' => $client->street_house_number,
            'zip_code'            => $client->zip_code,
            'city'                => $client->city,
            'different'           => (int)$client->different,
            'active'              => (int)$client->active,
//            'different'           => (bool)$client->different,
//            'active'              => (bool)$client->active,
            'created_at'       => $client->created_at,
            'updated_at'       => $client->updated_at,
        ];
    }
}