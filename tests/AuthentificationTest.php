<?php
/**
 * User: oumaziz
 * Date: 02/11/15
 * Time: 13:30
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthentificationTest extends TestCase
{

    /**
     * Fonction permettant de tester la création
     * d'un nouveau compte
     *
     * @return void
     */
    public function testCreateNewAccount()
    {

        $this->artisan('migrate');
        $this->flushSession();

        $this->visit('/auth/register')
            ->type('testCase', 'FirstName')
            ->type('testCase', 'FamilyName')
            ->type('test@testCase.com', 'email')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register');
    }
}
