<?php

namespace DemiboxConfig\Cookies;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CookiesConfigFalse extends TestCase
{

    use DatabaseTransactions;

    protected function setUp() : void
    {
        parent::setUp();

        $this->reset_demibox_config();

        config()->set([
            'demibox.cookies.show' => false,
        ]);
    }

    public function test_web_index() : void
    {
        $this->get("/")
            ->assertStatus(200)
            ->assertDontSeeText(trans('demibox.cookies.bar-btn-accept'));
    }

}
