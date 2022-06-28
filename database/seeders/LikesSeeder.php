<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            "user_id" => 1,
            "article_id" => 1
        ]);

        DB::table('likes')->insert([
            "user_id" => 2,
            "article_id" => 1
        ]);

        DB::table('likes')->insert([
            "user_id" => 2,
            "article_id" => 2
        ]);
    }
}
