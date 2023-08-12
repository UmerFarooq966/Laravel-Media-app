<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'title' => fake()->name(),
            'description' => fake() ->address(),
            'link' => fake()->text(),
            'image' =>fake()->image(),
            'publisheddate'=>fake()->dateTime,
            'category'=>fake()->city(),
            'channel'=>fake()->company(),


        ];
    }
}
