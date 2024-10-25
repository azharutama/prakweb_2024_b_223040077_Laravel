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
        Category::created([

            'name' => 'Web Design',
            'slug' => 'web-Desain'
        ]);

        Category::created([

            'name' => 'Intelegensia Buatan',
            'slug' => 'Intelegensia-Buatan'
        ]);

        Category::created([

            'name' => 'UI UX',
            'slug' => 'UI-UX'
        ]);
        // Category::factory(3)->create();
    }
}
