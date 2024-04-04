<?php

namespace Database\Seeders;

use App\Models\Club;
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
        Club::factory(1)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('Test1234'),
            'club_id' => 1,
        ]);

        User::factory(25)->create([
            'club_id' => 1
        ]);
    }
}
