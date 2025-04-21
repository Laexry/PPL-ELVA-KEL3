<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
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
                    ->assertPathIs('/dashboard')  //direct to dashboard
                    ->visit('/notes')  //direct to notes
                    ->clickLink('Create Note') //click to make note
                    ->type('title', 'Test') //insert title
                    ->type('description', 'test') //insert description
                    ->press('CREATE') //click to submit note
                    ->assertPathIs('/notes'); //redirect to notes

        });
    }
}
