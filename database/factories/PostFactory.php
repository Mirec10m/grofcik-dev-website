<?php

namespace Database\Factories;

use App\Post;
use App\PostCategory;
use App\PostItem;
use App\PostTag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Post>
 */
class PostFactory extends Factory
{

    public function definition() : array
    {
        return [
            'name_sk' => $name_sk = fake('sk')->name,
            'slug_sk' => str($name_sk)->slug()->toString(),
            'published_sk' => 1,
            'short_sk' => fake('sk')->text(100),
            'profile_name_sk' => fake('sk')->name,
            'profile_alt_sk' => fake('sk')->text(100),
            'profile_description_sk' => fake('sk')->text(100),
        ];
    }

    public function configure() : PostFactory
    {
        return $this->afterCreating(function (Post $post) {
            $post->items()->create( PostItem::factory()->paragraph()->make([ 'order' => 1 ])->toArray() );
            $post->items()->create( PostItem::factory()->image()->make([ 'order' => 2 ])->toArray() );
        });
    }

    public function unpublished() : PostFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'published_sk' => 0,
            ];
        });
    }

    public function with_category() : PostFactory
    {
        return $this->state(function (array $attributes) {
            return [
                'post_category_id' => PostCategory::inRandomOrder()->first()->id,
            ];
        });
    }

    public function with_tags() : PostFactory
    {
        return $this->afterCreating(function (Post $post) {
            $tags = PostTag::inRandomOrder()->limit(3)->get();

            $post->tags()->attach($tags);
        });
    }

}
