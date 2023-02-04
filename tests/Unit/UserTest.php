<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_endpoint_not_exist()
    {
        $response = $this->get('/update');
        $response->assertStatus(404);
    }

    public function test_user()
    {
        $user1 = User::make([
            'name' => 'Alvino',
            'email' => 'alvino@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Safitri',
            'email' => 'admin@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
        $this->assertTrue($user1->email != $user2->email);
    }
}
