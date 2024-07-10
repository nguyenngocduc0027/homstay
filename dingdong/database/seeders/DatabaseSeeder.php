<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table("users")->truncate();
        DB::table("users")->insert([
            "name" => "User",
            "email" => "user@gmail.com",
            "password" => bcrypt("12345678"),
            "permission" => '0',
        ]);
        DB::table("users")->insert([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("12345678"),
            "permission" => '1',
        ]);
        DB::table("users")->insert([
            "name" => "Super Admin",
            "email" => "superadmin@gmail.com",
            "password" => bcrypt("12345678"),
            "permission" => '2',
        ]);
    }
}
