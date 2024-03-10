<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง customers
        DB::table('customers')->insert([
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john@example.com',
                'phone_no' => '1234567890',
                'address' => '123 Main Street',
                'province' => 'California',
                'zipcode' => '90001',
                'location' => 'Los Angeles',
                'password' => Hash::make('password123'),
            ],
            [
                'fname' => 'Jane2',
                'lname' => 'Doe',
                'email' => 'jane2@example.com',
                'phone_no' => '9876543210',
                'address' => '456 Oak Avenue',
                'province' => 'New York',
                'zipcode' => '10001',
                'location' => 'New York City',
                'password' => Hash::make('password456'),
            ],
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john3@example.com',
                'phone_no' => '1234567890',
                'address' => '123 Main Street',
                'province' => 'California',
                'zipcode' => '90001',
                'location' => 'Los Angeles',
                'password' => Hash::make('password123'),
            ],
            [
                'fname' => 'Jane',
                'lname' => 'Doe',
                'email' => 'jane4@example.com',
                'phone_no' => '9876543210',
                'address' => '456 Oak Avenue',
                'province' => 'New York',
                'zipcode' => '10001',
                'location' => 'New York City',
                'password' => Hash::make('password456'),
            ],
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john5@example.com',
                'phone_no' => '1234567890',
                'address' => '123 Main Street',
                'province' => 'California',
                'zipcode' => '90001',
                'location' => 'Los Angeles',
                'password' => Hash::make('password123'),
            ],
            [
                'fname' => 'Jane',
                'lname' => 'Doe',
                'email' => 'jane6@example.com',
                'phone_no' => '9876543210',
                'address' => '456 Oak Avenue',
                'province' => 'New York',
                'zipcode' => '10001',
                'location' => 'New York City',
                'password' => Hash::make('password456'),
            ],
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john7@example.com',
                'phone_no' => '1234567890',
                'address' => '123 Main Street',
                'province' => 'California',
                'zipcode' => '90001',
                'location' => 'Los Angeles',
                'password' => Hash::make('password123'),
            ],
            [
                'fname' => 'Jane',
                'lname' => 'Doe',
                'email' => 'jane8@example.com',
                'phone_no' => '9876543210',
                'address' => '456 Oak Avenue',
                'province' => 'New York',
                'zipcode' => '10001',
                'location' => 'New York City',
                'password' => Hash::make('password456'),
            ],
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john9@example.com',
                'phone_no' => '1234567890',
                'address' => '123 Main Street',
                'province' => 'California',
                'zipcode' => '90001',
                'location' => 'Los Angeles',
                'password' => Hash::make('password123'),
            ],
            [
                'fname' => 'Jane',
                'lname' => 'Doe',
                'email' => 'jane10@example.com',
                'phone_no' => '9876543210',
                'address' => '456 Oak Avenue',
                'province' => 'New York',
                'zipcode' => '10001',
                'location' => 'New York City',
                'password' => Hash::make('password456'),
            ],
            // เพิ่มข้อมูลอื่น ๆ ตามต้องการ
        ]);
    }
}
