<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/api/ping', [
            "Accept" => "application/json",
            "content/type" => "application/json"
        ]);

        $response->assertStatus(200);

        $response->assertJson([
            'content' => 'pong',
        ]);

    }
}
