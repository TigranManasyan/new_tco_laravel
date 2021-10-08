<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 50; $i++) {
            DB::table('books')->insert([
                'name' => 'Book ' . $i,
                'author' => 'Admin',
                'pages' => rand(90,500),
                'category_id' => rand(1,21),
                'created_at' => NOW(),
                'updated_at' => NOW()
            ]);
        }
    }
}
