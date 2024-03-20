<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

use Illuminate\Http\UploadedFile;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create();

        $image = UploadedFile::fake()->image('avatar.jpg', 1024, 768)->size(1800); # Maximum size of 2MB

        return  [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'date_profiled' => now()->format('Y-m-d'),
            'primary_counsel_id' => rand(1,9),
            'date_of_birth' => $this->faker->date(),
            'profile_image' => $image,
            'case_details' => $this->faker->sentence,
        ];

    }
}
