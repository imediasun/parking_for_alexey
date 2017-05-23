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
            [
                'client_id'        => 1,
                'parking_price_id' => 2,
                'check_in_time'    => '08:00:00',
                'check_out_time'   => '09:30:00',
                'cost'             => 0,
            ],
            [
                'client_id'        => 1,
                'parking_price_id' => 1,
                'check_in_time'    => '18:00:00',
                'check_out_time'   => '18:30:00',
                'cost'             => 0,
            ],
        ]);
    }
}
