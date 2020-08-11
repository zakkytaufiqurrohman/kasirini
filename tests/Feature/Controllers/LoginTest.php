<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    /**
     * @test
     */
    public function fullNameReturnsStringWithFirsAndLastName()
    {
        // arrange
        $person = factory('App\Person')->create();

        // act
        $fullname = $person->fullName();

        // assets
        $this->assertContains($person->first_name, $fullname);
        $this->assertContains($person->last_name, $fullname);
    }
}
