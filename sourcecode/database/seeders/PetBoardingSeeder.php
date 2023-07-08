<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PetBoarding;
use Database\Factories\PetBoardingFactory;

class PetBoardingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PetBoarding::factory(10)->create();
    }
}
