<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([

            'name' => 'Web Design',
            'slug' => 'web-Desain',
            'color' => 'green'
        ]);

        Category::create([

            'name' => 'Intelegensia Buatan',
            'slug' => 'Intelegensia-Buatan',
            'color' => 'blue'
        ]);

        Category::create([

            'name' => 'UI UX',
            'slug' => 'UI-UX',
            'color' => 'red'

        ]);

        Category::create([

            'name' => 'Sistem Perancangan',
            'slug' => 'Sistem-Perancangan',
            'color' => 'yellow'

        ]);

        // Category::factory(3)->create();
    }
}
