<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'email'       => 'imediasun@gmail.com',
                'password'    => bcrypt('sunimedia'),
                'mobile'      => '+38(096)544-11-20',
                'add_phone'   => '+38(096)544-11-20',
                'information' => 'information description',
                'status'      => 1,
                'activated'   => true,
                'name'        => 'Лопушанский Андрей',

            ],
            [
                'email'       => 'imediasun8@gmail.com',
                'password'    => bcrypt('sunimedia'),
                'mobile'      => '+38(096)544-11-20',
                'add_phone'   => '+38(096)544-11-20',
                'information' => 'information description',
                'status'      => 2,
                'activated'   => true,
                'name'        => 'Демидов Сергей',
            ],
        ]);

        DB::table('roles')->insert([
            ['name' => 'Super Admin'],
            ['name' => 'Center Admin'],
            ['name' => 'Shop Admin'],
        ]);

        DB::table('role_user')->insert([
            [
                'user_id' => 1,
                'role_id' => 1,
            ],
            [
                'user_id' => 2,
                'role_id' => 2,
            ],
        ]);

        DB::table('permissions')->insert([
            ['name' => 'VIEW_ADMIN'],
            ['name' => 'ADMIN_USERS'],
            ['name' => 'SELF_ADMIN'],
        ]);

        DB::table('permission_role')->insert([
            [
                'role_id'       => 1,
                'permission_id' => 1,
            ],
            [
                'role_id'       => 1,
                'permission_id' => 2,
            ],
            [
                'role_id'       => 2,
                'permission_id' => 2,
            ],
            [
                'role_id'       => 3,
                'permission_id' => 3,
            ],
        ]);
    }
}
