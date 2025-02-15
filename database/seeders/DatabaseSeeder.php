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
        // User::factory(10)->create();

        User::factory()->create([
            'firstname' => 'Luigi',
            'middlename' => 'Nahine',
            'lastname' => 'Llorando',
            'email' => 'test@example.com',
            'section'=> '0',
            'password'=> bcrypt('admin12345'),
        ]);
    }
}
