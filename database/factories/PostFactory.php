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
            // 'body'=>'<p>' . implode('</p><p>',$this->faker->paragraphs(mt_rand(5,10))) . '</p>',
            'body'=>collect($this->faker->paragraphs(mt_rand(2,3)))
                    ->map(fn($p) => "<p>$p</p>")
                    ->implode(''),
            'excerpt'=>$this->faker->paragraph(1),
            'slug'=>$this->faker->slug(),
            'category_id'=>mt_rand(1,2),
            'user_id'=>mt_rand(1,3)
        ];
    }
}
