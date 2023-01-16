<?php

namespace Database\Factories;

use App\OrderItem;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition() : array
    {
        return [
            'name' => fake()->name,
            'unit_price' => random_int(5000, 10000) / 100,
            'quantity' => random_int(10, 30),
        ];
    }
}
