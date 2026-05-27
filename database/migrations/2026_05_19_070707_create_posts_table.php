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
    if (!Schema::hasTable('posts')) {
        Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->enum('type', ['blog', 'course', 'service']);
        $table->string('title');
        $table->string('slug')->unique();
        $table->string('short_description')->nullable();
        $table->longText('description')->nullable();
        $table->string('image')->nullable();

        // Course Fields
        $table->string('duration')->nullable();
        $table->string('level')->nullable();

        // Hero Section
        $table->string('hero_title_black')->nullable();
        $table->string('hero_title_blue')->nullable();
        $table->text('hero_description')->nullable();
        $table->string('hero_image')->nullable();

        // Blog Fields
        $table->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

        $table->string('category')->nullable();
        $table->string('author')->nullable();
        $table->text('content')->nullable();
        $table->json('tags')->nullable();
        $table->string('status')->default('draft'); 

        $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
