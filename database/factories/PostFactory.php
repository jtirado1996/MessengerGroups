<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\MessengerBrand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->text(20),
            'link' => 'https://google.com',
            'image' => 'https://via.placeholder.com/150',
            'category_id' => Category::first()->id,
            'messenger_brand_id' => MessengerBrand::first()->id
        ];
    }
}
