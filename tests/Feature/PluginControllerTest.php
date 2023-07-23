<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PluginControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_the_plugins_route_return_successful_view(): void
    {
        $response = $this->get('/plugins');
        $response->assertStatus(200);
        $response->assertViewIs('plugin.index');
    }
}
