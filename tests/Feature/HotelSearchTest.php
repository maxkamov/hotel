<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class HotelSearchTest extends TestCase
{
    public function test_is_alive() {
        $response = $this->get('/api/hotels/search');

        $response->assertStatus(Response::HTTP_OK);
    }
}
