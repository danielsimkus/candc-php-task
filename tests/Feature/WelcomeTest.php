<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testWelcomePageShowsSavedSearches()
    {
        $response = $this->get('/');

        $response->assertSeeText('American Fords');
        $response->assertStatus(200);
    }
}
