<?php

namespace Database\Seeders\Testing;

use App\Post;
use App\PostCategory;
use App\PostTag;
use App\User;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        if ( config('demibox.blog.show') !== true ) return;

        $post_factory = Post::factory(10);

        if ( config('demibox.blog.categories') === true ) {
            PostCategory::factory(3)->create();

            $post_factory = $post_factory->with_category();
        }

        if ( config('demibox.blog.tags') === true ) {
            PostTag::factory(5)->create();

            $post_factory = $post_factory->with_tags();
        }

        $post_factory->create();
    }

}
