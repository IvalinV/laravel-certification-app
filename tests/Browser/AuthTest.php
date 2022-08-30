<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_a_user_can_register_correctly()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                ->type('name', 'Ivalin Venkov')
                ->type('email', 'ivalinvenkov@gmail.com')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('button[type="submit"]')
                ->assertPathIs('/dashboard')
                ->clickLink('Dashboard')
                ->press('Ivalin Venkov')
                ->clickLink('Log Out');
        });
    }

    public function test_a_user_can_login_correctly()
    {
        $user = \App\Models\User::factory()->create([
            'email' => 'ivalinvenkov@gmail.com',
        ]);

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/')
                    ->clickLink('Log in')
                    ->type('email', $user->email)
                    ->type('password', 'password')
                    ->press('button[type="submit"]')
                    ->assertPathIs('/dashboard');
        });
    }
}
