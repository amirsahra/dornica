<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $postTitle = $this->faker->unique()->jobTitle();

        return [
            'title' => $postTitle,
            'slug' => str_replace(' ', '_', $postTitle),
            'content' => $this->faker->realText(),
            'study_time'=> 5,
            'author_id'=> $this->faker->numberBetween(1,100),
            'category_id'=> $this->faker->numberBetween(1,20),
        ];
    }
}