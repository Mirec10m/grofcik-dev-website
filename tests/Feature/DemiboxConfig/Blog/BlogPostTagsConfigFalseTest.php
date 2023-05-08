<?php

namespace DemiboxConfig\Blog;

use App\PostTag;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class BlogPostTagsConfigFalseTest extends TestCase
{

    use DatabaseTransactions;

    protected function setUp() : void
    {
        parent::setUp();

        $this->reset_demibox_config();

        config()->set('demibox.blog.tags', false);
    }

    public function test_post_tags_index() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->get("/admin/post-tags")
            ->assertStatus(404);
    }

    public function test_post_tags_create() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->get("/admin/post-tags/create")
            ->assertStatus(404);
    }

    public function test_post_tags_store() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->post("/admin/post-tags")
            ->assertStatus(404);
    }

    public function test_post_tags_edit() : void
    {
        $admin = User::factory()->admin()->create();
        $post_tag = PostTag::factory()->create();

        $this->actingAs($admin)->get("/admin/post-tags/$post_tag->id/edit")
            ->assertStatus(404);
    }

    public function test_post_tags_update() : void
    {
        $admin = User::factory()->admin()->create();
        $post_tag = PostTag::factory()->create();

        $this->actingAs($admin)->put("/admin/post-tags/$post_tag->id")
            ->assertStatus(404);
    }

    public function test_post_tags_destroy() : void
    {
        $admin = User::factory()->admin()->create();
        $post_tag = PostTag::factory()->create();

        $this->actingAs($admin)->delete("/admin/post-tags/$post_tag->id")
            ->assertStatus(404);
    }

}
