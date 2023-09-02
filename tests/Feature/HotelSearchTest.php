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

    public function test_search_by_name()
    {
        $expectedName = 'Aida';
        $response = $this->json('GET', '/api/hotels/search', [
            'name' => $expectedName
        ]);

        $data = $response['data'];

        $name = $data[0]['Name'];

        $this->assertMatchesRegularExpression("/^.*?$expectedName.*?$/",$name);
    }

    public function test_request_validation_fails()
    {
        $expectedName = 1;
        $response = $this->json('GET', '/api/hotels/search', [
            'name' => $expectedName
        ]);

        $this->assertArrayHasKey('errors',$response);
        $response->assertStatus(422);
    }

}
