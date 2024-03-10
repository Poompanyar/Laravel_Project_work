<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypesTableSeeder extends Seeder
{
    public function run()
    {
        // // เพิ่มข้อมูลในตาราง product_types
        // DB::table('product_types')->insert([
        //     ['product_type_name' => 'Electronics'],
        //     ['product_type_name' => 'Clothing'],
        //     ['product_type_name' => 'Furniture'],
        //     ['product_type_name' => 'Books'],
        //     ['product_type_name' => 'Toys'],
        //     ['product_type_name' => 'Sports'],
        //     ['product_type_name' => 'Beauty'],
        //     ['product_type_name' => 'Home and Garden'],
        //     ['product_type_name' => 'Automotive'],
        //     ['product_type_name' => 'Health'],
        // ]);
        DB::table('product_types')->insert([
            ['product_type_name' => 'Case'],
            ['product_type_name' => 'CPU'],
            ['product_type_name' => 'RAM'],
            ['product_type_name' => 'Mainboard'],
            ['product_type_name' => 'Monitor'],
            ['product_type_name' => 'HDD'],
            ['product_type_name' => 'SDD'],
            ['product_type_name' => 'Mouse'],
            ['product_type_name' => 'Keyboard'],
            ['product_type_name' => 'Headphone'],
           ]);
    }
}
