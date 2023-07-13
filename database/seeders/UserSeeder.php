<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create an admin account with encrypted password admin and username admin and email admin@admin.nl
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.nl',
            'password' => bcrypt('admin'),
            ]);
    }
}
