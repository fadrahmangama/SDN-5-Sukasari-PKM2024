<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title'=>$this->faker->sentence(mt_rand(2,8)),
            'body'=>$this->faker->paragraph(mt_rand(2,3)),
            'excerpt'=>$this->faker->paragraph(1),
            'slug'=>$this->faker->slug(),
            'category_id'=>mt_rand(1,2),
            'user_id'=>mt_rand(1,5)
        ];
    }
}