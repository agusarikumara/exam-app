<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence(mt_rand(2, 3)),
            "rating" => $this->faker->randomFloat(1, 10, 20),
            "voter" => $this->faker->randomNumber(4, true),
            "user_id" => mt_rand(1, 3),
            "category_id" => mt_rand(1, 2),
        ];
    }
}