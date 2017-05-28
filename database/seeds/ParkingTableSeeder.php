<?php

use Illuminate\Database\Seeder;

class ParkingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parking')->insert([

            // Client 1
            [
                'client_id'        => 1,
                'tradecentre_id'   => 1,
                'check_in_time'    => '2017-05-23 08:00:00',
                'check_out_time'   => '2017-05-23 08:50:00', // 1 hour (0h 50m) // 1h - $1
                'on_parking'       => 0,
                'cost'             => 1,
            ],
            [
                'client_id'        => 1,
                'tradecentre_id'   => 1,
                'check_in_time'    => '2017-05-23 18:00:00',
                'check_out_time'   => '2017-05-23 20:45:00', // 2 hour (2h 45m) // 3h - $4
                'on_parking'       => 0,
                'cost'             => 4,
            ],

            // Client 2
            [
                'client_id'        => 2,
                'tradecentre_id'   => 2,
                'check_in_time'    => '2017-05-23 11:00:00',
                'check_out_time'   => '2017-05-23 11:35:00', // 1 hour (0h 35m) // 1h - $1
                'on_parking'       => 0,
                'cost'             => 1,
            ],
            [
                'client_id'        => 2,
                'tradecentre_id'   => 2,
                'check_in_time'    => '2017-05-24 13:00:00',
                'check_out_time'   => '2017-05-24 13:50:00', // 1 hour (0h 50m) // 1h - $1
                'on_parking'       => 0,
                'cost'             => 1,
            ],
            [
                'client_id'        => 1,
                'tradecentre_id'   => 2,
                'check_in_time'    => '2017-05-23 10:00:00',
                'check_out_time'   => '2017-05-23 10:55:00', // 1 hour (0h 55m) // 1h - $1
                'on_parking'       => 0,
                'cost'             => 1,
            ],
            [
                'client_id'        => 2,
                'tradecentre_id'   => 2,
                'check_in_time'    => '2017-05-24 13:00:00',
                'check_out_time'   => '2017-05-24 17:45:00', // 4 hour (4h 45m) // 4h - $5
                'on_parking'       => 0,
                'cost'             => 5,
            ],
            [
                'client_id'        => 1,
                'tradecentre_id'   => 2,
                'check_in_time'    => '2017-05-23 16:00:00',
                'check_out_time'   => '2017-05-23 20:10:00', // 4 hour (4h 10m) // 4h - $5
                'on_parking'       => 0,
                'cost'             => 5,
            ],
        ]);
    }
}
