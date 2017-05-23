<?php

namespace App\Transformers;

use App\Parking;
use League\Fractal\TransformerAbstract;

class ParkingTransformer extends TransformerAbstract
{
    public function transform(Parking $parking)
    {
        return [
            'id'               => (int)$parking->id,
            'client_id'        => (int)$parking->client_id,
            'parking_price_id' => (int)$parking->parking_price_id,
            'check_in_time'    => $parking->check_in_time,
            'check_out_time'   => $parking->check_in_time,
            'cost'             => $parking->cost,
            'created_at'       => $parking->created_at,
            'updated_at'       => $parking->updated_at,
        ];
    }
}