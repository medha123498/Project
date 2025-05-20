<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // You can call other seeders here if needed:
        // $this->call(UserSeeder::class);

        // Seed 10 fake books
        Book::factory()->count(10)->create();
    }
}
