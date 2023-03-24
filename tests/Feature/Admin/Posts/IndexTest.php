<?php

namespace Tests\Feature\Admin\Posts;

use App\User;
use Database\Seeders\Testing\BlogSeeder;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class IndexTest extends TestCase
{

    use DatabaseTransactions;

    public function test_blog() : void
    {
        //$this->set_blog_config(true, true, true);

        $user = User::factory()->admin()->create();

        $this->seed(BlogSeeder::class);

        $response = $this->actingAs($user)->get('/admin/posts');

        $response->assertStatus(200)
            ->assertViewIs('admin.posts.index')
            ->assertViewHas('posts')
            ->assertSeeText('Kategória SK');
    }

    /*public function test_posts() : void
    {
        $this->set_blog_config(true, false, false);

        $user = User::factory()->admin()->create();

        $this->seed(BlogSeeder::class);

        $response = $this->actingAs($user)->get('/admin/posts');

        $response->assertStatus(200)
            ->assertViewIs('admin.posts.index')
            ->assertViewHas('posts')
            ->assertDontSeeText('Kategória SK');
    }*/

    public function test_categories() : void
    {
        $this->set_blog_config(true, true, false);

        $user = User::factory()->admin()->create();

        $this->seed(BlogSeeder::class);

        $response = $this->actingAs($user)->get('/admin/posts');

        dd(Route::getRoutes());

        $response->assertStatus(200)
            ->assertViewIs('admin.posts.index')
            ->assertViewHas('posts')
            ->assertSeeText('Kategória SK');
    }

    /*public function test_tags() : void
    {
        $this->set_blog_config(true, false, true);

        $user = User::factory()->admin()->create();

        $this->seed(BlogSeeder::class);

        $response = $this->actingAs($user)->get('/admin/posts');

        $response->assertStatus(200)
            ->assertViewIs('admin.posts.index')
            ->assertViewHas('posts')
            ->assertDontSeeText('Kategória SK');
    }

    public function test_no_blog() : void
    {
        $this->set_blog_config(false, false, false);

        $user = User::factory()->admin()->create();

        $this->seed(BlogSeeder::class);

        $response = $this->actingAs($user)->get('/admin/posts');

        $response->assertStatus(404);
    }*/

    private function set_blog_config(bool $posts, bool $categories, bool $tags) : void
    {
        config()->set([
            'demibox.blog.show' => $posts,
            'demibox.blog.categories' => $categories,
            'demibox.blog.tags' => $tags,
        ]);
    }

}
