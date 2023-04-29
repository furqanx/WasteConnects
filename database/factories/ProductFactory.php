<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Str::limit($this->faker->name, 23), // maksimal 24 karakter
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'location' => $this->faker->city,
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
