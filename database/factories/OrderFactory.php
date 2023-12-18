<?php

namespace Database\Factories;

use App\Models\Cashier;
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
            'user_id' => User::factory(), // Assuming you have a User model and factory
            'cashier_id' => Cashier::factory(), // Assuming you have a Cashier model and factory
            'total_amount' => $this->faker->randomFloat(2, 10, 200),
        ];
    }
}
