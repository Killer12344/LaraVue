<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $description = $this->faker->sentence(500);

        return [

            'title' => $this->faker->realText(20),
            'description' => $description,
            'excerpt' => Str::words($description, 20, '...'),
            'user_id' => User::all()->random()->id,

        ];
    }
}
