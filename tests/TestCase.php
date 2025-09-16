<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function dpost($uri, $domain, $data = [])
    {
        return $this->post('http://'.config("domains.$domain.url").$uri, $data);
    }
}
