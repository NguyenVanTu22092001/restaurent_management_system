<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'UserID' => 6,
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->phoneNumber,
            'TableID' => rand(1, 5), // Replace with actual table IDs
            'ReservationDate' => fake()->date,
            'ReservationTime' => fake()->time,
            'status' => 0,
            // 'status' => fake()->randomElement(['confirmed', 'canceled', 'pending']),
            'seats' => fake()->numberBetween(1, 10),
        ];
    }
}
