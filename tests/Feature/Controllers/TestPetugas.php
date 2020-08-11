<?php

namespace Tests\Feature\Http\Controllers;


use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestPetugas extends TestCase
{
    use DatabaseTransactions;
    public function testPostsCreation()
    {

        factory('App\User')->create([
            'name' => 'dsd',
            'email' => 'zakky@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => '1232321321321323'
        ]);

        // $this->assertDatabaseHas('User', [
        //     'title' => $title,
        //     'description' => $description
        // ]);
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /**
 * @test
 */

}
