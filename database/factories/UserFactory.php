<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'avatar' => $this->faker->imageUrl(),
            'firstname' => $this->faker->firstName,
            'middlename' =>$this->faker->firstNameMale,
            'lastname' => $this->faker->lastName,
            'phone' => $this->faker->regexify('09[0-9]{9}'),
            'bday' => $this->faker->dateTimeBetween('-50 years', '-20 years')->format('Y-m-d'),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'house_number' => $this->faker->buildingNumber,
            'street' => function () {
                $streets = File::get(public_path('streets.txt'));
                $streetsArray = explode("\n", $streets);
                return $this->faker->randomElement($streetsArray);
            },
            'sitio' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7']),
            'brgy' => 'East Rembo',
            'city' => 'Makati City',
            'zip' => '1216',
            'image' => $this->faker->imageUrl(),
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'active_status' => $this->faker->randomElement(['0', '1']),
            'account_status' => $this->faker->randomElement(['0', '1']),
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // or use $faker->password to generate random passwords
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
