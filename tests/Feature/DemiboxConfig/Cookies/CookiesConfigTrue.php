<?php

namespace DemiboxConfig\Cookies;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CookiesConfigTrue extends TestCase
{

    use DatabaseTransactions;

    protected function setUp() : void
    {
        parent::setUp();

        $this->reset_demibox_config();

        config()->set([
            'demibox.cookies.show' => true,
        ]);
    }

    public function test_web_index() : void
    {
        $this->get("/")
            ->assertStatus(200)
            ->assertSeeText(trans('demibox.cookies.bar-btn-accept'));
    }

}
