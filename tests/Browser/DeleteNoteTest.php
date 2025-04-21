<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNoteTest extends DuskTestCase
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
                    ->press('Delete') //click on delete button
                    ->assertPathIs('/notes'); //redirect to notes list
        });
    }
}
