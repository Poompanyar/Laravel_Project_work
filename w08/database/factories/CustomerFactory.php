<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_name'=>fake()->name(),
            'email'=>fake()->email(),
            'phone_no'=>fake()->randomNumber(9),
            'address'=>fake()->text(20),
            'password'=>fake()->password(),
        ];
    }
}
