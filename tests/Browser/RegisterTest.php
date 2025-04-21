<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {

        $this->browse(function (Browser $browser){

            $browser->visit('/register') //access register page
                    ->type('name', 'Testuser') //insert name
                    ->type('email', 'testemail@gmail.com') //insert email
                    ->type('password', 'testpassword123') //insert password
                    ->type('password_confirmation', 'testpassword123') //confirm password
                    ->press('REGISTER') //click on register
                    ->assertPathIs('/dashboard') //redirect to dashboard
                    ->assertSee('Dashboard');
        });
    }
}
