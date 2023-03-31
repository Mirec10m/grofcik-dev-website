<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\PostItem>
 */
class PostItemFactory extends Factory
{

    public function definition(): array
    {
        return [];
    }

    public function paragraph() : PostItemFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => 'paragraph',
                'paragraph_text_sk' => fake('sk')->text(),
            ];
        });
    }

    public function image() : PostItemFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => 'image',
                'image_name_sk' => fake('sk')->name(),
                'image_alt_sk' => fake('sk')->text(80),
                'image_description_sk' => fake('sk')->text(100),
            ];
        });
    }

}
