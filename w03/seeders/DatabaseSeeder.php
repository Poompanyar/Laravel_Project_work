<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            BrandsTableSeeder::class,
            ProductsTableSeeder::class,
            CustomersTableSeeder::class,
            PromotionsTableSeeder::class,
        ]);
    }
}
