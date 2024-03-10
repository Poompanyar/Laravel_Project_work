<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง categories
        DB::table('categories')->insert([
            ['category_name' => 'Electronics'],
            ['category_name' => 'Clothing'],
            ['category_name' => 'Furniture'],
            ['category_name' => 'Books'],
            ['category_name' => 'Toys'],
            ['category_name' => 'Sports'],
            ['category_name' => 'Beauty'],
            ['category_name' => 'Home and Garden'],
            ['category_name' => 'Automotive'],
            ['category_name' => 'Health'],
        ]);
    }
}
