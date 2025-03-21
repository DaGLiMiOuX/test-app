<?php

namespace Database\Factories\PageArray;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PageArray\ElementThird>
 */
class ElementThirdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(25),
            'description' => fake()->text(125),
            'another_field' => fake()->text(12),
            'show' => fake()->boolean(),
        ];
    }
}
