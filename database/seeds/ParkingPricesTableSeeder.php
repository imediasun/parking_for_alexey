<?php

use Illuminate\Database\Seeder;

class ParkingPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parking_prices')->insert([
            [
                'tradecentre_id' => 1,
                'day'            => 1,
                'time'           => 1,
                'price'          => 1,
            ],
            [
                'tradecentre_id' => 1,
                'day'            => 1,
                'time'           => 3,
                'price'          => 4,
            ],
            [
                'tradecentre_id' => 2,
                'day'            => 1,
                'time'           => 1,
                'price'          => 1,
            ],
            [
                'tradecentre_id' => 2,
                'day'            => 2,
                'time'           => 5,
                'price'          => 5,
            ],
        ]);
    }
}
