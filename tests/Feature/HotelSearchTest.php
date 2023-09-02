<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class HotelSearchTest extends TestCase
{
    public function test_is_alive()
    {
        $response = $this->get('/api/hotels/search');

        $response->assertStatus(Response::HTTP_OK);
    }

    public function test_paginate_house()
    {
        $response = $this->get('/api/hotels/search');

        $data = $response['data'];
        $expectedCount = 10;

        $this->assertCount($expectedCount, $data);
    }
}
