<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // Call seeders in a specific order
        /*         $this->call([
            UserSeeder::class,      // Populate the users table first
        ]);

        $this->command->info('Database seeding completed successfully!'); */
    }
}
