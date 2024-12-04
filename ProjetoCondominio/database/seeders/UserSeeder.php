<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Karoline Ribeiro',
            'email' => 'karolineRibeiro@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('anabelaRibeiro@email.com'),
            'user_type' => 'Admin',
        ]);

        User::create([
            'name' => 'António Costa',
            'email' => 'antonioCosta@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('antonioCosta@email.com'),
            'user_type' => 'Admin',
        ]);

        User::create([
            'name' => 'Bruno Santos',
            'email' => 'brunoSantos@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('brunoSantos@email.com'),
            'user_type' => 'Moderator',
        ]);

        User::create([
            'name' => 'Vitor Santos',
            'email' => 'vitorSantos@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('vitorSantos@email.com'),
            'user_type' => 'Moderator',
        ]);
    }
}
