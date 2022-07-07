<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('comments')->insert([
            'user_id' => '1',
            'article_id' => '1',
            'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.',
            'created_at' => '2022-06-27 07:51:03',
            'updated_at' => '2022-06-27 07:51:03'
        ]);

        DB::table('comments')->insert([
            'user_id' => '1',
            'article_id' => '1',
            'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.',
            'created_at' => '2022-06-27 07:51:03',
            'updated_at' => '2022-06-27 07:51:03'
        ]);

        DB::table('comments')->insert([
            'user_id' => '1',
            'article_id' => '1',
            'text' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.',
            'created_at' => '2022-06-27 07:51:03',
            'updated_at' => '2022-06-27 07:51:03'
        ]);

        DB::table('comments')->insert([
            'user_id' => '2',
            'article_id' => '2',
            'text' => 'At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.',
            'created_at' => '2022-06-28 05:51:03',
            'updated_at' => '2022-06-28 05:51:03'
        ]);

        DB::table('comments')->insert([
            'user_id' => '3',
            'article_id' => '3',
            'text' => 'no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'created_at' => '2022-06-29 12:44:03',
            'updated_at' => '2022-06-29 12:44:03'
        ]);

        DB::table('comments')->insert([
            'user_id' => '3',
            'article_id' => '3',
            'text' => 'no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'created_at' => '2022-06-29 12:44:03',
            'updated_at' => '2022-06-29 12:44:03'
        ]);

        DB::table('comments')->insert([
            'user_id' => '3',
            'article_id' => '3',
            'text' => 'no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'created_at' => '2022-06-29 12:44:03',
            'updated_at' => '2022-06-29 12:44:03'
        ]);

        DB::table('comments')->insert([
            'user_id' => '3',
            'article_id' => '3',
            'text' => 'no sea takimata sanctus est Lorem ipsum dolor sit amet.',
            'created_at' => '2022-06-29 12:44:03',
            'updated_at' => '2022-06-29 12:44:03'
        ]);
    }
}
