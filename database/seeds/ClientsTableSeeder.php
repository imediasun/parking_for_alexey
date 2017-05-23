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
                'company_name'        => 'Test1CompanyName',
                'first_name'          => 'Test1FirstName',
                'last_name'           => 'Test1LastName',
                'street_house_number' => 'Test1Street 1, 1',
                'zip_code'            => 'Test1ZipCode',
                'city'                => 'Test1City',
                'different'           => '1',
                'active'              => '0',
            ],
            [
                'company_name'        => 'Test2CompanyName',
                'first_name'          => 'Test2FirstName',
                'last_name'           => 'Test2LastName',
                'street_house_number' => 'Test2Street 1, 1',
                'zip_code'            => 'Test2ZipCode',
                'city'                => 'Test2City',
                'different'           => '1',
                'active'              => '0',
            ],
        ]);
    }
}
