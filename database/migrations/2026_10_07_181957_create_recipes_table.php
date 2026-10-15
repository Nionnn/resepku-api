<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
    $table->id();

    $table->string('name');
    $table->text('description')->nullable();
    $table->string('image')->nullable();

    $table->foreignId('category_id')
        ->constrained('categories')
        ->cascadeOnDelete();

    $table->unsignedInteger('cooking_time_minutes')->nullable();

    $table->decimal('rating', 2, 1)->default(0);

    $table->foreignId('uploader_id')
        ->constrained('users')
        ->cascadeOnDelete();

    $table->timestamps();
});
          
            
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
