<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Promotion>
 */
class PromotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'promotion_name'=>$this->faker->words(2,true),
            'p_start'=>fake()->date(),
            'p_end'=>fake()->date(),
            'percent_discount'=>fake()->randomNumber(2),
        ];
    }
}
