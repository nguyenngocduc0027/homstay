<?php

namespace Database\Seeders;

use App\Models\User;
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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table("users")->truncate();
        DB::table("users")->insert([
                "name"=> "Nguoi Dung",
                "email"=> "user@gmail.com",
                "password"=> bcrypt("12345678"),
                "type"=> '0',
                'avatar'=> '/img/user/avatar/ava.jpg',
        ]);
        DB::table("users")->insert([
            "name"=> "Quan ly",
            "email"=> "admin@gmail.com",
            "password"=> bcrypt("12345678"),
            "type"=> '1',
            'avatar'=> '/img/user/avatar/ava.jpg',
        ]);
        DB::table("users")->insert([
            "name"=> "Super Admin",
            "email"=> "superadmin@gmail.com",
            "password"=> bcrypt("12345678"),
            "type"=> '2',
            'avatar'=> '/img/user/avatar/ava.jpg',
        ]);
    }
}
