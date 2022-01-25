<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            // 1. gen new row
            $new_travel = new Travel();

            // 2. set properties
            $new_travel->period = $faker->words(10, true);
            $new_travel->destination = $faker->words(10, true);
            $new_travel->description = $faker->paragraph(2, false);
            $new_travel->services = $faker->paragraph(1, false);
            $new_travel->price = $faker->randomFloat(2, 100, 30000);
            $new_travel->thumbnail_url = $faker->imageUrl(360, 360, 'landscapes', true);

            // 3. save row
            $new_travel->save();
        }
    }
}