<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class WeightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
 
            'peso' =>$this->faker->randomFloat(1, 20, 30),
            'user_id'=>User::all()->random()->id,
        ];
    }
}
