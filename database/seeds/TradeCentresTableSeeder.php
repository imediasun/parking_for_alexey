<?php

use Illuminate\Database\Seeder;

class TradeCentresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tradecentres')->insert([
            [
                'user_id' => 1,
                'name'    => 'TestCenter1',
            ],
            [
                'user_id' => 2,
                'name'    => 'TestCenter2',
            ],
        ]);
    }
}
