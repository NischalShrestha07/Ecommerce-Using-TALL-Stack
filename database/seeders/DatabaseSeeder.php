<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create();

        User::factory()->create([
            'name' => 'Manish',
            'email' => 'manish@gmail.com',
            'password' => Hash::make('manish123')
        ]);


        Category::factory(90)->create(); // Seed categories first
        Brand::factory(90)->create();    // Seed brands first
        $this->call(ProductSeeder::class);
    }
}
