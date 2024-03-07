<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'user_id' => 1,
                'category_id' => 1,
                'evaluate' => 5,
                'title' => 'スマブラ',
                'body' => 'おもしろい',
                'difficult' => 5,
                'image_path' => 'aaa',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}