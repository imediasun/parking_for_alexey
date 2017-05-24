<?php

use Illuminate\Database\Seeder;

class AdvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adv')->insert([
            [
                'title'             => 'p1Test1AdvTitle',
                'short_description' => 'p1Test1AdvShortDescription',
                'large_description' => 'p1Test1AdvLargeDescription Test1AdvLargeDescription',
                'image_small'       => 'p1image_small7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'image_medium'      => 'p1image_medium7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'image_large'       => 'p1image_large7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'thumbnail'         => 'p1thumbnail7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
            ],
            [
                'title'             => 'p1Test2AdvTitle',
                'short_description' => 'p1Test2AdvShortDescription',
                'large_description' => 'p1Test2AdvLargeDescription Test2AdvLargeDescription',
                'image_small'       => 'p1image_small7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'image_medium'      => 'p1image_medium7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'image_large'       => 'p1image_large7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'thumbnail'         => 'p1thumbnail7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
            ],
            [
                'title'             => 'p2Test3AdvTitle',
                'short_description' => 'p2Test3AdvShortDescription',
                'large_description' => 'p2Test3AdvLargeDescription Test3AdvLargeDescription',
                'image_small'       => 'p2image_small7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'image_medium'      => 'p2image_medium7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'image_large'       => 'p2image_large7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
                'thumbnail'         => 'p2thumbnail7036664-flames(d235d81fab6cb10f7b0d6668861bef91).jpg',
            ],
        ]);

        DB::table('parking_adv')->insert([
            [
                'adv_id'     => 1,
                'parking_id' => 1,
            ],
            [
                'adv_id'     => 2,
                'parking_id' => 1,
            ],
            [
                'adv_id'     => 3,
                'parking_id' => 2,
            ],
        ]);
    }
}
