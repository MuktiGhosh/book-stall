<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory()->create([
             'first_name' => 'Test',
             'last_name' => 'User',
             'email' => 'test@example.com',
             'password' => bcrypt('password'),
         ]);

        \App\Models\Book::factory(8)->create();
    }
}
