<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        DB::table('roles')->insert([
            [
                'name' => 'Super Admin',
            ],
            [
                'name' => 'Center Admin',
            ],
            [
                'name' => 'Shop Admin',
            ],
        ]);


        DB::table('permissions')->insert([
            [
                'name' => 'VIEW_ADMIN',
            ],
            [
                'name' => 'ADMIN_USERS',
            ],
            [
                'name' => 'SELF_ADMIN',
            ]
        ]);


        DB::table('permission_role')->insert([
            [
                'role_id' => 1,
                'permission_id' => 1,
            ],
            [
                'role_id' => 1,
                'permission_id' => 2,
            ],
            [
                'role_id' => 2,
                'permission_id' => 2,
            ],
            [
                'role_id' => 3,
                'permission_id' => 3,
            ]
        ]);


        DB::table('super_admin_categories')->insert([
            [
                'parent_id' => 0,
                'name' => 'Пользователи',
                'icon' => 'fa-users',
                'link' => '/admin'
            ],
            [
                'parent_id' => 1,
                'name' => 'Управление пользователями',
                'icon' => 'fa-registered',
                'link' => '/admin/customers_managment'
            ],
            [
                'parent_id' => 0,
                'name' => 'Торговые центры',
                'icon' => 'fa-gift',
                'link' => '/admin/trade_centres'
            ],
            [
                'parent_id' => 3,
                'name' => 'Добавить торговый центр',
                'icon' => 'fa-envelope',
                'link' => '/admin/add_trade_center'
            ],
            [
                'parent_id' => 3,
                'name' => 'Редактировать торговый центр',
                'icon' => 'fa-envelope',
                'link' => '/admin/edit_trade_center/edit_center'
            ],
            [
                'parent_id' => 0,
                'name' => 'Клиенты',
                'icon' => 'fa-envelope',
                'link' => '/admin/clients'
            ],
            [
                'parent_id' => 0,
                'name' => 'Реклама',
                'icon' => 'fa-bullhorn',
                'link' => '/admin/adv'
            ],
            [
                'parent_id' => 0,
                'name' => 'Партнери',
                'icon' => 'fa-thumbs-o-up',
                'link' => '/admin/partners'
            ],
            [
                'parent_id' => 9,
                'name' => 'Логотипы',
                'icon' => 'fa-envelope',
                'link' => '/admin/add_logos'
            ],
            [
                'parent_id' => 3,
                'name' => 'Тарифы парковки на центр',
                'icon' => 'fa-envelope',
                'link' => '/admin/edit_trade_center/cost'
            ],
            [
                'parent_id' => 7,
                'name' => 'Добавить рекламу',
                'icon' => 'fa-envelope',
                'link' => '/admin/add_adv_section'
            ],
            [
                'parent_id' => 7,
                'name' => 'Редактировать рекламу',
                'icon' => 'fa-envelope',
                'link' => '/admin/edit_adv_section/edit_adv'
            ],
        ]);


        DB::table('center_admin_categories')->insert([
            [
                'parent_id' => 0,
                'name' => 'Торговый центр',
                'icon' => 'fa-users',
                'link' => '/caenter_admin/trade_center'
            ],
            [
                'parent_id' => 1,
                'name' => 'Тарифы парковки',
                'icon' => 'fa-registered',
                'link' => '/caenter_admin/parking_payment'
            ],

            [
                'parent_id' => 1,
                'name' => 'Статистика',
                'icon' => 'fa-gift',
                'link' => '/caenter_admin/statistic'
            ],
            [
                'parent_id' => 0,
                'name' => 'Акции',
                'icon' => 'fa-envelope',
                'link' => '/caenter_admin/sales'
            ]
        ]);


        DB::table('admin_categories')->insert([
            [
                'parent_id' => 0,
                'name' => 'Акции',
                'icon' => 'fa-users',
                'link' => '/shop_admin/sales'
            ],
            [
                'parent_id' => 0,
                'name' => 'Статистика',
                'icon' => 'fa-gift',
                'link' => '/shop_admin/statistic'
            ]
        ]);
    }
}
