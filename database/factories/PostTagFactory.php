<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\PostTag>
 */
class PostTagFactory extends Factory
{

    public function definition() : array
    {
        return [
            'name_sk' => $name_sk = fake('sk')->name,
            'slug_sk' => str($name_sk)->slug(),
        ];
    }

}
