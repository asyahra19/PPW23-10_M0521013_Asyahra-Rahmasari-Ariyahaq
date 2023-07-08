<?php

namespace Database\Factories;

use App\Models\PetBoarding;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class PetBoardingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PetBoarding::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'pet_name' => $faker->name,
            'owner_name' => $faker->name,
            'pet_age'=>$faker->randomDigitNotNull,
            'entry_date' => $faker->date,
            'exit_date' => $faker->date
        ];
    }
}