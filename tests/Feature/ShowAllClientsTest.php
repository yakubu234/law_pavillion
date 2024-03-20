<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowAllClientsTest extends TestCase
{
    use RefreshDatabase, HasFactory;

    private $clientController;
    private $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = \Faker\Factory::create();
    }

    public function test_it_can_list_clients()
    {
        Client::factory()->count(2)->create();
        $client = Client::factory()->create(['last_name' => 'Doe']);
        $response = $this->get('/clients');

        $response->assertViewIs('index'); 
        $response->assertViewHas('clients', function ($clients) use ($client) {
            return $clients->contains($client);# Ensure client is in the clients list
        });
    }
}
