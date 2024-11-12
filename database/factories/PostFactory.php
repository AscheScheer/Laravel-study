<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        return [
            'titlepost' => $title,
            'slug' => $this->generateUniqueSlug($title),
            'payload' => $this->faker->text(),
        ];
    }

    /**
     * Generate unique slug based on titlepost
     *
     * @param string $title
     * @return string
     */
    private function generateUniqueSlug($title)
    {
        // Generate the initial slug
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        // Check if the slug exists in the database
        while (Post::where('slug', $slug)->exists()) {
            // If exists, append the count to the slug
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}

