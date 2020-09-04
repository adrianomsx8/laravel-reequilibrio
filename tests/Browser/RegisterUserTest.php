<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterUserTest extends DuskTestCase
{
    /** @test */
    public function verificarSeSiteRootEstaCorreto()
    {
        $this->browse(function (Browser $browser) {
           $browser->visit('/')
                    ->assertSee('Projeto Reequilibrio');
        });
    }

     /** @test */
     public function verificaLoginFuncionando()
     {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                     ->type('email','teste@teste.com.br')
                     ->type('password', '12345678')
                     ->press('login')
                     ->assertPathIs('/home');
         });
     }

     /** @test */
    public function verificaCadastroFuncionando()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                     ->type('name','User Test')
                     ->type('email', 'userTest@test.com.br')
                     ->type('password', '12345678')
                     ->type('password_confirmation', '12345678')
                     ->press('Register')
                     ->assertPathIs('/home')
                     ->assertSee('Dashboard');
         });
    }
}
