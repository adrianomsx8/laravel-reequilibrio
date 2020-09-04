<?php

namespace Tests\Unit;

use App\User;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /** @test */
    public function verificarColunasUsuarios()
    {
       $user = new User;

       $expected = ['name', 'email', 'password', 'profile'];
       $arrayCompared = array_diff($expected,  $user->getFillable());
       $this->assertEquals(0, count($arrayCompared));
    }
}
