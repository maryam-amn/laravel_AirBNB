<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appartement>
 */
class AppartementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('-3 months', 'now');
        $endDate = $this->faker->dateTimeBetween($startDate, '+2 months');

        $createdAt = $this->faker->dateTimeBetween('-3 months', 'now');
        $updatedAt = $this->faker->dateTimeBetween($createdAt, 'now');

        return [
            //
            'created_at' => $createdAt,
            'updated_at' => $updatedAt,
            'user_id' => $this->faker->numberBetween(1, 10),
            'street' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'description' => $this->faker->text(),
            'picture' => 'picture_apt/image.jpg',
            'price_per_day' => $this->faker->numberBetween(1,100),
            'start_date' => $startDate,
            'end_date' => $endDate,
        ];
    }
}
