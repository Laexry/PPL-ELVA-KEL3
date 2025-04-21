<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login') //access login page
                    ->type('email', 'testcase@gmail.com') //insert email
                    ->type('password', 'testpassword123') //insert password
                    ->press('LOG IN') //click login
                    ->assertPathIs('/dashboard')  //redirect to dashboard
                    ->press('Testuser') //click of profile
                    ->clickLink('Log Out'); //click to log out
        });
    }
}
