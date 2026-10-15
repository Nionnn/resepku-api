<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipe;
use App\Models\RecipeStep;
use App\Models\User;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::pluck('id', 'name');
        $categories = Category::pluck('id', 'name');

        $recipes = [
            [
                'name' => 'Nasi Goreng Spesial',
                'image' => 'assets/images/recipes/nasi_goreng_spesial.jpg',
                'category' => 'Olahan Nasi',
                'cooking_time_minutes' => 20,
                'rating' => 4.5,
                'uploader' => 'Budi Santoso',
                'ingredients' => [
                    ['name' => 'Nasi putih', 'amount' => '2 piring'],
                    ['name' => 'Telur ayam', 'amount' => '2 butir'],
                    ['name' => 'Bawang merah', 'amount' => '3 siung'],
                    ['name' => 'Kecap manis', 'amount' => '2 sdm'],
                ],
                'steps' => [
                    'Panaskan minyak, tumis bawang hingga harum',
                    'Masukkan telur, orak-arik hingga matang',
                    'Tambahkan nasi dan kecap, aduk rata',
                    'Sajikan selagi hangat',
                ],
            ],
            [
                'name' => 'Ayam Bakar Kecap',
                'image' => 'assets/images/recipes/ayam_bakar_kecap.jpg',
                'category' => 'Olahan Ayam',
                'cooking_time_minutes' => 35,
                'rating' => 4.7,
                'uploader' => 'Siti Rahma',
                'ingredients' => [
                    ['name' => 'Ayam potong', 'amount' => '1/2 ekor'],
                    ['name' => 'Kecap manis', 'amount' => '5 sdm'],
                    ['name' => 'Bawang putih', 'amount' => '4 siung'],
                    ['name' => 'Jeruk nipis', 'amount' => '1 buah'],
                ],
                'steps' => [
                    'Lumuri ayam dengan jeruk nipis, diamkan 10 menit',
                    'Haluskan bawang putih, campur dengan kecap manis',
                    'Marinasi ayam dengan bumbu selama 30 menit',
                    'Panggang ayam sambil sesekali diolesi bumbu hingga matang',
                ],
            ],
            [
                'name' => 'Pisang Goreng Crispy',
                'image' => 'assets/images/recipes/pisang_goreng_crispy.jpg',
                'category' => 'Cemilan',
                'cooking_time_minutes' => 15,
                'rating' => 4.3,
                'uploader' => 'Rina Wulandari',
                'ingredients' => [
                    ['name' => 'Pisang kepok', 'amount' => '5 buah'],
                    ['name' => 'Tepung beras', 'amount' => '150 gram'],
                    ['name' => 'Tepung terigu', 'amount' => '50 gram'],
                    ['name' => 'Air es', 'amount' => '150 ml'],
                ],
                'steps' => [
                    'Campur tepung beras, tepung terigu, dan air es hingga jadi adonan',
                    'Belah pisang menjadi dua bagian memanjang',
                    'Celupkan pisang ke adonan tepung',
                    'Goreng dalam minyak panas hingga keemasan',
                ],
            ],
            [
                'name' => 'Ikan Bakar Bumbu Kuning',
                'image' => 'assets/images/recipes/ikan_bakar_bumbu_kuning.jpg',
                'category' => 'Olahan Ikan',
                'cooking_time_minutes' => 40,
                'rating' => 4.6,
                'uploader' => 'Agus Prasetyo',
                'ingredients' => [
                    ['name' => 'Ikan kembung', 'amount' => '2 ekor'],
                    ['name' => 'Kunyit', 'amount' => '2 ruas'],
                    ['name' => 'Serai', 'amount' => '2 batang'],
                    ['name' => 'Daun jeruk', 'amount' => '3 lembar'],
                ],
                'steps' => [
                    'Bersihkan ikan, lumuri dengan air jeruk nipis dan garam',
                    'Haluskan kunyit, serai, dan bumbu lainnya',
                    'Lumuri ikan dengan bumbu halus, diamkan 20 menit',
                    'Bakar ikan hingga matang merata sambil dibolak-balik',
                ],
            ],
            [
                'name' => 'Es Teh Serai Segar',
                'image' => 'assets/images/recipes/es_teh_serai.jpg',
                'category' => 'Minuman',
                'cooking_time_minutes' => 10,
                'rating' => 4.4,
                'uploader' => 'Dewi Lestari',
                'ingredients' => [
                    ['name' => 'Teh celup', 'amount' => '2 kantong'],
                    ['name' => 'Serai', 'amount' => '1 batang, memarkan'],
                    ['name' => 'Gula pasir', 'amount' => '3 sdm'],
                    ['name' => 'Es batu', 'amount' => 'secukupnya'],
                ],
                'steps' => [
                    'Seduh teh dan serai dengan air panas selama 5 menit',
                    'Saring, lalu campurkan gula pasir, aduk hingga larut',
                    'Dinginkan di suhu ruang',
                    'Tuang ke gelas berisi es batu, sajikan',
                ],
            ],
            [
                'name' => 'Ayam Geprek Sambal Bawang',
                'image' => 'assets/images/recipes/ayam_geprek.jpg',
                'category' => 'Olahan Ayam',
                'cooking_time_minutes' => 30,
                'rating' => 4.8,
                'uploader' => 'Budi Santoso',
                'ingredients' => [
                    ['name' => 'Ayam fillet', 'amount' => '300 gram'],
                    ['name' => 'Tepung bumbu kriuk', 'amount' => '100 gram'],
                    ['name' => 'Cabai rawit', 'amount' => '15 buah'],
                    ['name' => 'Bawang putih goreng', 'amount' => '5 siung'],
                ],
                'steps' => [
                    'Lumuri ayam dengan tepung bumbu kriuk',
                    'Goreng ayam hingga matang dan renyah',
                    'Ulek cabai rawit dan bawang putih goreng dengan sedikit minyak panas',
                    'Geprek ayam bersama sambal, sajikan',
                ],
            ],
            [
                'name' => 'Keripik Tempe Renyah',
                'image' => 'assets/images/recipes/keripik_tempe.jpg',
                'category' => 'Cemilan',
                'cooking_time_minutes' => 25,
                'rating' => 4.2,
                'uploader' => 'Rina Wulandari',
                'ingredients' => [
                    ['name' => 'Tempe', 'amount' => '1 papan'],
                    ['name' => 'Tepung beras', 'amount' => '200 gram'],
                    ['name' => 'Ketumbar bubuk', 'amount' => '1 sdt'],
                    ['name' => 'Daun jeruk', 'amount' => '3 lembar, iris halus'],
                ],
                'steps' => [
                    'Iris tempe tipis-tipis',
                    'Campur tepung beras dengan ketumbar dan daun jeruk, tambahkan air',
                    'Celupkan irisan tempe ke adonan tepung',
                    'Goreng dalam minyak panas hingga kering dan renyah',
                ],
            ],
        ];

        foreach ($recipes as $data) {
            $recipe = Recipe::updateOrCreate(
                ['name' => $data['name']],
                [
                    'image' => $data['image'],
                    'category_id' => $categories[$data['category']],
                    'cooking_time_minutes' => $data['cooking_time_minutes'],
                    'rating' => $data['rating'],
                    'uploader_id' => $users[$data['uploader']],
                ]
            );

            $recipe->ingredients()->delete();
            $recipe->steps()->delete();

            foreach ($data['ingredients'] as $index => $ingredient) {
                Ingredient::create([
                    'recipe_id' => $recipe->id,
                    'name' => $ingredient['name'],
                    'amount' => $ingredient['amount'],
                    'sort_order' => $index + 1,
                ]);
            }

            foreach ($data['steps'] as $index => $step) {
                RecipeStep::create([
                    'recipe_id' => $recipe->id,
                    'step_number' => $index + 1,
                    'description' => $step,
                ]);
            }
        }
    }
}
