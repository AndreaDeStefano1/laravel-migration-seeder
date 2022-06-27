<?php

use App\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){
            $new_train = new Train();
            $new_train->company_name = $faker->company();
            $new_train->departures_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departures_hour = $faker->time();
            $new_train->arrival_hour = $faker->time();
            $new_train->train_code = $faker->randomNumber(4, true);
            $new_train->wagons = $faker->numberBetween(9,20);
            $new_train->save();
        }
    }
}
