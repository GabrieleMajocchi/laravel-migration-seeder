<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company;
            $newTrain->start_station = $faker->city;
            $newTrain->end_station = $faker->city;
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->train_code = $faker->unique()->bothify('??###');
            $newTrain->train_section = $faker->numberBetween(1, 15);
            $newTrain->on_time = $faker->randomElement(['Yes', 'No']);
            $newTrain->deleted = $faker->randomElement(['Yes', 'No']);
            $newTrain->created_at = now();
            $newTrain->updated_at = now();
            $newTrain->save();
        }
    }
}
