<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            // 'category_id' => $this->faker->numberBetween(1, 1000),
            // 'brand_id' => $this->faker->numberBetween(1, 1000),
            // 'name' => $this->faker->name(),
            // 'slug' => $this->faker->slug(),
            // 'description' => $this->faker->paragraph(),
            // 'price' => mt_rand(1, 5000),
            // 'is_active' => $this->faker->boolean(),
            // 'is_featured' => $this->faker->boolean(),
            // 'in_stock' => $this->faker->boolean(),
            // 'on_sale' => $this->faker->boolean(),
            'category_id' => \App\Models\Category::factory(),
            'brand_id' => \App\Models\Brand::factory(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->paragraph(),
            'price' => mt_rand(1, 5000),
            'is_active' => $this->faker->boolean(),
            'is_featured' => $this->faker->boolean(),
            'in_stock' => $this->faker->boolean(),
            'on_sale' => $this->faker->boolean(),
        ];
    }
}
