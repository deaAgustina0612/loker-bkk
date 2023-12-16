<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        // \App\Models\User::factory()->create([
            User::create([
            'name' => 'dea',
            'email' => 'dea@gmail.com',
            'password' => bcrypt('12345') ,
            'level' => 'some_value' // Replace 'some_value' with the appropriate value or NULL if it's optional
        ]);
    }
}
