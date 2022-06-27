<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;

class Comments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Comment::create([
            'id' => '1',
            'user_id' => '1',
            'text' => 'test comment',
            'created_at' => '',
            'updated_at' => '',
        ]);
    }
}
