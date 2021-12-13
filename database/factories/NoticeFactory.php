<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class NoticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->unique()->sentence();

        return [
            'title'=>$title,
            'body' =>$this->faker->text(1000),
            'user_id'=>User::all()->random()->id,
        ];
    }
}
