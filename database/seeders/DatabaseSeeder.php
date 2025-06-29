<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\PostSeeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create(); // Make sure users exist first
        $this->call([
            PostSeeder::class,
        ]);
    }
}
