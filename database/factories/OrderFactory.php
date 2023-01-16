<?php

namespace Database\Factories;

use App\Order;
use App\OrderItem;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    private static int $number = 1;
    private static array $statuses = [ 'received', 'shipped', 'closed', 'storno' ];
    private static array $payment_types = [ 'Platba kartou', 'Dobierka' ];
    private static array $delivery_types = [ 'Slovenská pošta', 'UPS', 'Odber' ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws Exception
     */
    public function definition() : array
    {
        return [
            'number' => now()->year . sprintf('%05d', self::$number++),
            'customer' => fake('sk')->firstName . ' ' . fake('sk')->lastName,
            'city' => fake('sk')->city,
            'address' => fake('sk')->streetAddress,
            'postal_code' => fake('sk')->postcode,
            'phone' => fake('sk')->phoneNumber,
            'email' => fake('sk')->email,
            'payment_type' => self::$payment_types[ array_rand(self::$payment_types) ],
            'payment_price' => random_int(1, 3) + .99,
            'delivery_type' => self::$delivery_types[ array_rand(self::$delivery_types) ],
            'delivery_price' => random_int(1, 2) + .49,
            'status' => self::$statuses[ array_rand(self::$statuses) ],
            'price' => random_int(100000, 1000000) / 100,
        ];
    }

    public function items() : OrderFactory
    {
        return $this->afterMaking(function (Order $order) {
            $order->setRelation('order_items', OrderItem::factory(5)->make());
        });
    }

}
