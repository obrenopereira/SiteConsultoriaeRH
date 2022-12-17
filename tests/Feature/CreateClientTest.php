<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateClientTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSuccessfully()
    {
        $route = route('client.save');

        $user = factory(User::class)->create();

        $payload = [
            'id' => $user->id
        ];

        $response = $this
            ->actingAs($user)
            ->post($route, $payload)->dump();
    }
}
