<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('comments')->insert([
            // 'id' => '1',
            'user_id' => '1',
            'text' => 'test comment',
            // 'created_at' => '',
            // 'updated_at' => '',
        ]);
    }
}
