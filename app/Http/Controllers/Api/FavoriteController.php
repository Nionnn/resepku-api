<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Recipe;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index(Request $request)
    {
        $favorites = Favorite::with([
            'recipe.category',
            'recipe.uploader',
        ])
            ->where('user_id', $request->user()->id)
            ->latest()
            ->get();

        return response()->json([
            'success' => true,
            'data' => $favorites,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'recipe_id' => ['required', 'integer', 'exists:recipes,id'],
        ]);

        $favorite = Favorite::firstOrCreate([
            'user_id' => $request->user()->id,
            'recipe_id' => $validated['recipe_id'],
        ]);

        $favorite->load([
            'recipe.category',
            'recipe.uploader',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Recipe berhasil ditambahkan ke favorite',
            'data' => $favorite,
        ], $favorite->wasRecentlyCreated ? 201 : 200);
    }

    public function destroy(Request $request, Recipe $recipe)
    {
        $deleted = Favorite::where('user_id', $request->user()->id)
            ->where('recipe_id', $recipe->id)
            ->delete();

        if (!$deleted) {
            return response()->json([
                'success' => false,
                'message' => 'Recipe tidak ditemukan di favorite',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Recipe berhasil dihapus dari favorite',
        ]);
    }
}
