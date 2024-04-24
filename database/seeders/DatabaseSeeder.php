<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin user',
            'email' => 'admin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Admin Password'),
            'remember_token' => \Str::random(10),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Regular user',
            'email' => 'user@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Regular User Password'),
            'remember_token' => \Str::random(10),
            'role' => 'user'
        ]);
    }
}
