<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class tripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
            $trip = new Trip();
            $trip->destination = $faker->citySuffix();
            $trip->fly = $faker->citySuffix();
            $trip->luggage = $faker->citySuffix();
            $trip->amount = $faker->randomFloat(2);
            $trip->save();


        }
    }
}
