<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNoteTest extends DuskTestCase
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
                    ->clickLink('Edit') //click on edit on an existing note
                    ->assertPathIs('/edit-note-page/4') //access url of an existing note
                    ->type('title', 'test edited') //insert edited title
                    ->type('description', 'test desc edited') //insert edited description
                    ->press('UPDATE') //click update button
                    ->assertPathIs('/notes'); //redirect to notes
        });
    }
}
