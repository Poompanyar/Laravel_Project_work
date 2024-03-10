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
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'phone_no'=>fake()->phoneNumber(),
            'address'=>fake()->address(),
            'province'=>fake()->name(),
            'zipcode'=>fake()->randomNumber(5),
            'location'=>fake()->text(50),
            'password'=>fake()->password(),
            'customers_id'=>fake()->numberBetween(1,10),
        ];
    }
}
