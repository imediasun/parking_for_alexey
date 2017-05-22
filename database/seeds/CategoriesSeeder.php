<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'email' => 'imediasun@gmail.com',
                'password' => bcrypt('sunimedia'),
                'mobile' => '+38(096)544-11-20',
                'add_phone' => '+38(096)544-11-20',
                'information' => 'information description',
                'status' => 1,
                'activated' => true,
                'name' => 'Лопушанский Андрей'

            ],
            [
                'email' => 'imediasun8@gmail.com',
                'password' => bcrypt('sunimedia'),
                'mobile' => '+38(096)544-11-20',
                'add_phone' => '+38(096)544-11-20',
                'information' => 'information description',
                'status' => 2,
                'activated' => true,
                'name' => 'Демидов Сергей'
            ]
        ]);

        DB::table('role_user')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ],
            [
                'user_id' => 2,
                'role_id' => 2

            ]/*, [
            'user_id' => 3,
            'role_id' => 3
            ]*/
        ]);

        DB::table('applications')->insert([
            [
                'name' => 'Asgard Connect',
                'key' => '111222333',
                'secret' => 'aaabbbccc'
            ]
        ]);
    }
}

