<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DateTime;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(3,4)),
            'slug' => fake()->slug(),
            'author_id' => mt_rand(1,10),
            'category_id' => mt_rand(1,12),
            'excerpt' => fake()->paragraph(),
            'body' => fake()->paragraphs(mt_rand(6, 10), true),
            'published_at' => fake()->dateTimeBetween('-1 week', '+1 week')
        ];
    }

}
