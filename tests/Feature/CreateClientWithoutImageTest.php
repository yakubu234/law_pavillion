<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateClientWithoutImageTest extends TestCase
{
    use RefreshDatabase;

    private $clientController;
    private $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = \Faker\Factory::create();
    }

    public function test_it_can_create_a_client_without_image()
    {
        $request = [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'date_profiled' => now()->format('Y-m-d'),
            'primary_counsel_id' => rand(1,9),
            'date_of_birth' => $this->faker->date(),
            'case_details' => $this->faker->sentence,
        ];

        $response = $this->post('/clients/create', $request);
        $this->assertCount(1, Client::all());# Ensure client was created

        $response->assertRedirect(route('clients.index'));
        $response->assertSessionHas('success');

    }
}
