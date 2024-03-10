<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง brands
        DB::table('brands')->insert([
            ['brand_name' => 'Sony'],
            ['brand_name' => 'Nike'],
            ['brand_name' => 'Samsung'],
            ['brand_name' => 'Adidas'],
            ['brand_name' => 'Apple'],
            ['brand_name' => 'Puma'],
            ['brand_name' => 'LG'],
            ['brand_name' => 'Levis'],
            ['brand_name' => 'Microsoft'],
            ['brand_name' => 'Reebok'],
        ]);
    }
}
