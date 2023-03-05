<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Motorbike>
 */
class MotorbikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'model' => $this->faker->name,
            'color' => $this->faker->safeColorName(),
            'weight' => $this->faker->randomNumber(mt_rand(1, 2), true),
            'price' => $this->faker->randomNumber(mt_rand(1,6), true),
            'image_path' => $this->faker->image,
        ];
    }
}
