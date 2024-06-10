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
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'user'
        ]);
        // Konser::factory()->create([
        //     'title' => 'Bigu Festival',
        //     'slug' => 'bigu-festival',
        //     'image' => '',
        //     'date_start' => '2023-01-01',
        //     'date_end' => '2023-01-02',
        //     'time' => '10:00:00',
        //     'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quis vitae ullam dolorum. Suscipit dolorem, quis consequatur voluptatum accusamus iusto excepturi! Ut, minus aspernatur, perferendis ex ipsam impedit pariatur aut veritatis eveniet at dolorum voluptates reprehenderit sapiente fugit. Libero velit nobis tenetur voluptas quo voluptate, optio, autem dolore reprehenderit quod et necessitatibus nam magni? Dolorum cupiditate numquam, harum rem repellendus voluptate beatae labore voluptas molestias modi officiis voluptates autem omnis, maiores, suscipit corrupti doloremque? Illo molestias quo harum suscipit distinctio dolore porro quisquam, fugiat accusamus odio eum, perferendis soluta rem ullam libero! Dolores non magni nesciunt excepturi molestias iste quis?',
        // ]);
        // Ticket::factory()->create([
        //     'konser_id' => '1',
        //     'title' => 'Early Bird VIP',
        //     'price' => '100000',
        //     'kuota' => '10',
        //     'status' => 'On Sale'
        // ]);
    }
}
