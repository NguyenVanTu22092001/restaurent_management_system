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

        $startTime = \Carbon\Carbon::parse('18:00:00'); // 6 PM
        $endTime = \Carbon\Carbon::parse('21:00:00'); // 9 PM

        return [
            'UserID' =>  rand(2, 5),
            'name' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'phone' => fake()->phoneNumber,
            'TableID' => rand(1, 5), // Replace with actual table IDs
            'ReservationDate' => fake()->dateTimeBetween('2020-01-01', '2023-12-31'),
            'ReservationTime' => fake()->dateTimeBetween($startTime, $endTime)->format('H:i:s'),
            'status' => 0,
            // 'status' => fake()->randomElement(['confirmed', 'canceled', 'pending']),
            'seats' => fake()->numberBetween(1, 8),
        ];
    }
}
