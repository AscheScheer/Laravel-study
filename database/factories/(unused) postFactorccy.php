<?php

namespace Database\Factories;

use illuminate\support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titlepost' => fake()->sentence(),
            'slug' => Str::slug(fake()->sentence()),
            'payload' => fake()->text()
        ];
    }
}
