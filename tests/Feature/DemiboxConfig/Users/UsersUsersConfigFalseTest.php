<?php

namespace DemiboxConfig\Users;

use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UsersUsersConfigFalseTest extends TestCase
{

    use DatabaseTransactions;

    protected function setUp() : void
    {
        parent::setUp();

        $this->reset_demibox_config();

        config()->set('demibox.users.show', false);
    }

    public function test_users_index() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->get("/admin/users")
            ->assertStatus(404);
    }

    public function test_users_create() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->get("/admin/users/create")
            ->assertStatus(404);
    }

    public function test_users_store() : void
    {
        $admin = User::factory()->admin()->create();

        $this->actingAs($admin)->post("/admin/users")
            ->assertStatus(404);
    }

    public function test_users_edit() : void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();

        $this->actingAs($admin)->get("/admin/users/$user->id/edit")
            ->assertStatus(404);
    }

    public function test_users_update() : void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();

        $this->actingAs($admin)->put("/admin/users/$user->id")
            ->assertStatus(404);
    }

    public function test_users_destroy() : void
    {
        $admin = User::factory()->admin()->create();
        $user = User::factory()->create();

        $this->actingAs($admin)->delete("/admin/users/$user->id")
            ->assertStatus(404);
    }

}
