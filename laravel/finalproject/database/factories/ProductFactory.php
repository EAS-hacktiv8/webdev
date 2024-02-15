<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->text(),
            'status' => fake()->randomElement(['draft', 'publish']),
            'category_id' => Category::whereNot('parent_id', null)->inRandomOrder()->first()->id,
            'price' => fake()->randomNumber(3) * 1000,
            'weight' => fake()->randomFloat(2, 1, 100),
            'image_url' => fake()->imageUrl(360, 360, 'product', true),
        ];
    }
}
