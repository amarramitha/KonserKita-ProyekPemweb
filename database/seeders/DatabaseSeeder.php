<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Konser;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'ivandarmawan2020@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'amarramitha.thantawi@mhs.unsoed.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'adila.hasyati@mhs.unsoed.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
    }
}
