<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "hans",
            "email" => "hans@gmail.com",
            "password" => Hash::make("password")
        ]);

        DB::table('users')->insert([
            "name" => "fritz",
            "email" => "fritz@gmail.com",
            "password" => Hash::make("password")
        ]);

        DB::table('users')->insert([
            "name" => "sepp",
            "email" => "sepp@gmail.com",
            "password" => Hash::make("password")
        ]);
    }
}
