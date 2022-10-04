<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function test_LoginCorrecto()
    {
        $response = $this->post('/login',['name' => 'Jose', 'password' => '1234']);
        $response->assertStatus(301);
        $response->assertLocation("/private");
    }

    public function test_LoginIncorrecto()
    {
        $response = $this->post('/login',['name' => 'addsfs', 'password' => 'sdfsdf']);
        $response->assertStatus(200);
        $response->assertViewHas("errorAutenticacion", true);

    }
}
