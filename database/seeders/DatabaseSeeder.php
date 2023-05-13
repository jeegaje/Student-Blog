<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Author::factory(10)->create();
        \App\Models\Blog::factory(60)->create();

        \App\Models\Category::factory()->create([
            'name' => 'U.S.',
            'slug' => 'united-states',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'World',
            'slug' => 'world',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Technology',
            'slug' => 'technology',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Design',
            'slug' => 'design',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Culture',
            'slug' => 'culture',
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Business',
            'slug' => 'business',
        ]);\App\Models\Category::factory()->create([
            'name' => 'Politics',
            'slug' => 'politics',
        ]);\App\Models\Category::factory()->create([
            'name' => 'Opinion',
            'slug' => 'opinion',
        ]);\App\Models\Category::factory()->create([
            'name' => 'Science',
            'slug' => 'science',
        ]);\App\Models\Category::factory()->create([
            'name' => 'Health',
            'slug' => 'health',
        ]);\App\Models\Category::factory()->create([
            'name' => 'Style',
            'slug' => 'style',
        ]);\App\Models\Category::factory()->create([
            'name' => 'Travel',
            'slug' => 'travel',
        ]);
        
    }
}
