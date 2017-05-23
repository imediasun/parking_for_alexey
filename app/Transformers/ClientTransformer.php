<?php

namespace App\Transformers;

use App\Client;
use League\Fractal\TransformerAbstract;

class ClientTransformer extends TransformerAbstract
{
    public function transform(Client $client)
    {
        return [
            'id' => (int) $client->id,
            'company_name' => $client->company_name,
            'first_name' => $client->first_name,
            'last_name' => $client->last_name,
        ];
    }
}