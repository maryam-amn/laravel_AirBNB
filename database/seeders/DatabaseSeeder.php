<?php

namespace Database\Seeders;

use App\Models\Appartement;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

      /*  User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        User::factory(10)->create();
        Appartement::factory(10)->create();
        Reservation::factory(10)->create();
    }
}
