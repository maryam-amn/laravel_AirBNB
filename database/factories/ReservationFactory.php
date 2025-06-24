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
        return [
            //
            'created_at' => $this->faker->dateTimeBetween('-3 months', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-3 months', 'now'),
            'user_id' =>  $this->faker->numberBetween(1, 10),
            'appartement_id' =>  $this->faker->numberBetween(1, 10),
            'date_reserved' => $this->faker->date(),
            'nbr_of_people' => $this->faker->randomDigit(),
        ];
    }
}
