<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowSingleClientTest extends TestCase
{
    use RefreshDatabase, HasFactory;

    private $clientController;
    private $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = \Faker\Factory::create();
    }

    public function test_it_can_show_a_client()
    {
        Client::factory()->count(2)->create();
        $client = Client::factory()->create(['last_name' => 'Doe']);
        $response = $this->get('clients/get?last_name=Doe');

        $response->assertViewIs('show'); 
        $response->assertViewHas('client', function ($clients) use ($client) {
            return $clients->contains($client);# Ensure client is in the clients list
        });
    }

}
