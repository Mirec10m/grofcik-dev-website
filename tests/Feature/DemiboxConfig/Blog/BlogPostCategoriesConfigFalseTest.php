<?php

namespace DemiboxConfig\Blog;

use App\PostCategory;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class BlogPostCategoriesConfigFalseTest extends TestCase
{

    use DatabaseTransactions;

    protected function setUp() : void
    {
        parent::setUp();

        $this->reset_demibox_config();

        config()->set('demibox.blog.categories', false);
    }

    public function test_post_categories_index() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->get("/admin/post-categories")
            ->assertStatus(404);
    }

    public function test_post_categories_create() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->get("/admin/posts/post-categories")
            ->assertStatus(404);
    }

    public function test_post_categories_store() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->post("/admin/post-categories")
            ->assertStatus(404);
    }

    public function test_post_categories_edit() : void
    {
        $admin = User::factory()->admin()->create();
        $post_category = PostCategory::factory()->create();

        $this->actingAs($admin)->get("/admin/post-categories/$post_category->id/edit")
            ->assertStatus(404);
    }

    public function test_post_categories_update() : void
    {
        $admin = User::factory()->admin()->create();
        $post_category = PostCategory::factory()->create();

        $this->actingAs($admin)->put("/admin/post-categories/$post_category->id")
            ->assertStatus(404);
    }

    public function test_post_categories_destroy() : void
    {
        $admin = User::factory()->admin()->create();
        $post_category = PostCategory::factory()->create();

        $this->actingAs($admin)->delete("/admin/post-categories/$post_category->id")
            ->assertStatus(404);
    }

}
