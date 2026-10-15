<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Olahan Nasi',
            'icon' => 'rice_bowl',
        ]);

        Category::create([
            'name' => 'Olahan Ayam',
            'icon' => 'lunch_dining',
        ]);

        Category::create([
            'name' => 'Cemilan',
            'icon' => 'cookie',
        ]);

        Category::create([
            'name' => 'Olahan Ikan',
            'icon' => 'set_meal',
        ]);

        Category::create([
            'name' => 'Minuman',
            'icon' => 'local_cafe',
        ]);
    }
}
