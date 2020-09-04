<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TerapiasTest extends TestCase
{
    /** @test */
    public function somenteUsuariosLogadosPodemAcessarListaTerapias()
    {
        $response = $this->get('/admin/terapias/index')
                 ->assertRedirect('/login');
    }
}
