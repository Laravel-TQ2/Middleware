<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;


class UsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_CrearUsuario()
    {
        $user = Str::random(12);
        $password = Str::random(12);
        $email = Str::random(5) . '@' . Str::random(5) . ".com";

        $responseCreate = $this->post('/crearUsuario',['user' => $user, 'password' => $password, 'email' => $email]);
        $responseValidate = $this->post('/login',['name' => $user, 'password' => $password]);


        $responseCreate->assertStatus(200);
        $responseCreate->assertViewHas("usuarioCreado", true);

        $responseValidate->assertStatus(301);
        $responseValidate->assertLocation("/private");
    }

    
}
