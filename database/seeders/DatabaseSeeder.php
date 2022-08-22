<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\Category::factory(4)->create();
        \App\Models\SubCategory::factory(20)->create();

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'example@example.ch',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);
    }
}
