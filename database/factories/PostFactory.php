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
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(1),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            'user_id' => mt_rand(1, 4),
            'category_id' => mt_rand(1, 6),

        ];
    }
}
