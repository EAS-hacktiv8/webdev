<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_status' => fake()->randomElement(['pending', 'processing', 'completed', 'canceled']),
            'user_id' => User::inRandomOrder()->first()->id,
            'order_date' => fake()->date(),
            'invoice_id' => fake()->uuid(),
        ];
    }
}
