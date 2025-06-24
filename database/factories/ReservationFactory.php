<?php

namespace Database\Factories;

use App\Models\Appartement;
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
        $createdAt = $this->faker->dateTimeBetween('-3 months', 'now');
        $updatedAt = $this->faker->dateTimeBetween($createdAt, 'now');
        return [
            //
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
            'user_id' =>  $this->faker->numberBetween(1, 10),
            'appartement_id' =>  $this->faker->numberBetween(1, 10),
            'date_reserved' => $this->faker->date(),
            'nbr_of_people' => $this->faker->randomDigit(),
        ];
    }
}
