<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * Admin login test.
     *
     * @return void
     */
    public function testAdminLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Login')
                ->type('email','admin@test.com')
                ->type('password','Admin Password')
                ->press('@login')
                ->waitForRoute('admin.dashboard.index')
                ->assertSee('Welcome Admin user');
        });
    }

    /**
     * User login test.
     *
     * @return void
     */
    public function testUserLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSee('Login')
                ->type('email','user@test.com')
                ->type('password','Regular User Password')
                ->press('@login')
                ->waitForRoute('user.dashboard.index')
                ->assertSee('Welcome Regular user')
                ->visitRoute('admin.dashboard.index')
                ->waitForRoute('user.dashboard.index');
        });
    }
}
