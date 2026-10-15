<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::with([
            'category',
            'uploader',
        ])->latest()->get();

        return response()->json([
            'success' => true,
            'data' => $recipes,
        ]);
    }

    public function show(int $id)
    {
        $recipe = Recipe::with([
            'category',
            'uploader',
            'ingredients',
            'steps',
        ])->find($id);

        if (!$recipe) {
            return response()->json([
                'success' => false,
                'message' => 'Recipe not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $recipe,
        ]);
    }
}
