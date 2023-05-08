<?php

namespace DemiboxConfig\Blog;

use App\Post;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class BlogPostsConfigFalseTest extends TestCase
{

    use DatabaseTransactions;

    protected function setUp() : void
    {
        parent::setUp();

        $this->reset_demibox_config();

        config()->set('demibox.blog.show', false);
    }

    public function test_posts_index() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->get("/admin/posts")
            ->assertStatus(404);
    }

    public function test_posts_create() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->get("/admin/posts/create")
            ->assertStatus(404);
    }

    public function test_posts_store() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->post("/admin/posts")
            ->assertStatus(404);
    }

    public function test_posts_edit() : void
    {
        $admin = User::factory()->admin()->create();
        $post = Post::factory()->create();

        $this->actingAs($admin)->get("/admin/posts/$post->id/edit")
            ->assertStatus(404);
    }

    public function test_posts_update() : void
    {
        $admin = User::factory()->admin()->create();
        $post = Post::factory()->create();

        $this->actingAs($admin)->put("/admin/posts/$post->id")
            ->assertStatus(404);
    }

    public function test_posts_destroy() : void
    {
        $admin = User::factory()->admin()->create();
        $post = Post::factory()->create();

        $this->actingAs($admin)->delete("/admin/posts/$post->id")
            ->assertStatus(404);
    }

}
