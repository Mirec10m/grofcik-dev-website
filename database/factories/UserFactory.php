<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\User>
 */
class UserFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake('sk')->firstName,
            'surname' => fake('sk')->lastName,
            'email' => fake('sk')->email,
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'admin' => 0,
            'super_admin' => 0,
            'position' => fake('sk')->word,
            'menu_pinned' => 1,
        ];
    }

    public function admin() : UserFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'name' => 'admin',
                'surname' => 'admin',
                'email' => 'admin',
                'password' => bcrypt('admin'),
                'admin' => 1,
            ];
        });
    }

    public function superadmin() : UserFactory
    {
        return $this->admin()->state(function (array $attributes) {
            return [
                'super_admin' => 1,
            ];
        });
    }

}
