<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'fname' => 'Ahmed Shamim Hasan',
            'lname' => 'Shaon',
            'username' => 'samim',
            'email' => 'shaon@dot.com',
            'password' => '123456',
            'bio' => 'Less Talk, More Code 💻',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
