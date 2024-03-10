<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionsTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง promotions
        DB::table('promotions')->insert([
            [
                'promotion_name' => 'Summer Sale',
                'p_start' => now(),
                'p_end' => now()->addDays(30),
                'percent_discount' => 15,
            ],
            [
                'promotion_name' => 'Back to School',
                'p_start' => now()->addDays(30),
                'p_end' => now()->addDays(60),
                'percent_discount' => 10,
            ],
            // เพิ่มข้อมูลอื่น ๆ ตามต้องการ
        ]);
    }
}
