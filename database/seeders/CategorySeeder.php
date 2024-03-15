<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'SWITCH',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ]
        );
         DB::table('categories')->insert(
            [
                'name' => 'PlayStation',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
        );
         DB::table('categories')->insert(
            [
                'name' => 'スマホゲーム',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
