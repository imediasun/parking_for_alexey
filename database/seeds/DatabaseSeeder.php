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
        $this->call(UsersTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
        $this->call(AdminCategoriesTableSeeder::class);

        $this->call(ClientsTableSeeder::class);
        $this->call(TradeCentresTableSeeder::class);
        $this->call(ParkingPricesTableSeeder::class);
        $this->call(ParkingTableSeeder::class);
        $this->call(AdvTableSeeder::class);
    }
}
