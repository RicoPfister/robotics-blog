<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            "category" => "industry",
            "title" => "Article 1",
            "short" => "This is short of article 1.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "user_id" => 1,
            'created_at' => '2022-06-27 07:51:03',
            "filename_image" => "image1.png"

        ]);

        DB::table('articles')->insert([
            "category" => "medical",
            "title" => "Article 2",
            "short" => "This is short of article 2.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "user_id" => 1,
            'created_at' => '2022-06-27 07:51:03',
            "filename_image" => "image2.png"
        ]);

        DB::table('articles')->insert([
            "category" => "industry",
            "title" => "Article 3",
            "short" => "This is short of article 3.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "user_id" => 2,
            'created_at' => '2022-06-27 07:51:03',
            "filename_image" => "image3.png"
        ]);

        DB::table('articles')->insert([
            "category" => "entertainment",
            "title" => "Article 9000",
            "short" => "This is short of article 3.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "user_id" => 2,
            'created_at' => '2022-06-27 07:51:03',
            "filename_image" => "image3.png"
        ]);

        DB::table('articles')->insert([
            "category" => "robotics",
            "title" => "Article 277",
            "short" => "This is short of article 3.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "user_id" => 2,
            'created_at' => '2022-06-27 07:51:03',
            "filename_image" => "image3.png"
        ]);

        DB::table('articles')->insert([
            "category" => "robotics",
            "title" => "Article 55",
            "short" => "This is short of article 3.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "user_id" => 2,
            'created_at' => '2022-06-27 07:51:03',
            "filename_image" => "image3.png"
        ]);

        DB::table('articles')->insert([
            "category" => "robotics",
            "title" => "Article 54",
            "short" => "This is short of article 3.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "user_id" => 2,
            'created_at' => '2022-06-27 07:51:03',
            "filename_image" => "image3.png"
        ]);

        DB::table('articles')->insert([
            "category" => "robotics",
            "title" => "Article 189",
            "short" => "This is short of article 3.",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "user_id" => 2,
            'created_at' => '2022-06-27 07:51:03',
            "filename_image" => "image3.png"
        ]);
    }
}
