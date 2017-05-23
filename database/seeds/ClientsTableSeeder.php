<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            [
                'company_name'        => 'CompanyName - Test1',
                'first_name'          => 'FirstName - Test1',
                'last_name'           => 'LastName - Test1',
                'street_house_number' => 'Street 1, 1 - Test1',
                'zip_code'            => 'ZipCode - Test1',
                'city'                => 'City - Test1',
                'different'           => '1',
                'active'              => '0',
            ],
            [
                'company_name'        => 'CompanyName - Test2',
                'first_name'          => 'FirstName - Test2',
                'last_name'           => 'LastName - Test2',
                'street_house_number' => 'Street 2, 2 - Test2',
                'zip_code'            => 'ZipCode - Test2',
                'city'                => 'City - Test2',
                'different'           => '1',
                'active'              => '0',
            ],
        ]);
    }
}
