<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function reset_demibox_config() : void
    {
        config()->set([
            'demibox.cookies.show' => false,
            'demibox.users.show' => false,
            'demibox.users.admins' => false,
            'demibox.blog.show' => false,
            'demibox.blog.categories' => false,
            'demibox.blog.tags' => false,
        ]);
    }

}
