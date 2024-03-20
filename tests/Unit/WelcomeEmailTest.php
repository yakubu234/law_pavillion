<?php

namespace Tests\Unit;

use App\Mail\WelcomeMail;
use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\TestCase;

class WelcomeEmailTest extends TestCase
{
    use RefreshDatabase;

    private $clientController;
    private $faker;

    protected function setUp(): void
    {
        parent::setUp();
        $this->faker = \Faker\Factory::create();
    }

    public function test_it_can_send_welcome_email()
    {
        $request = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'date_profiled' => '2024-03-21',
            'primary_counsel_id' => 1, 
            'date_of_birth' => '1990-01-01',
            'case_details' => 'Sample case details'
        ];

        Client::create($request);

        $this->assertCount(1, Client::all());
        $this->assertEquals('john.doe@example.com', Client::first()->email); 

    }
}
