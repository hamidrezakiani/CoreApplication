<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LibraryControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_the_libraries_route_return_successful_view(): void
    {
        $response = $this->get('/libraries');
        $response->assertStatus(200);
        $response->assertViewIs('library.index');
    }
}
