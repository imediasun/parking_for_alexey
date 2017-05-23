<?php

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')->insert([
            [
                'name'   => 'Asgard Connect',
                'key'    => '111222333',
                'secret' => 'aaabbbccc',
            ],
        ]);
    }
}
