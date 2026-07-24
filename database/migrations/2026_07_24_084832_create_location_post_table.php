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
        if (! Schema::hasTable('location_post')) {

            Schema::create('location_post', function (Blueprint $table) {

                $table->id();

                if (! Schema::hasColumn('location_post', 'post_id')) {
                    $table->foreignId('post_id')
                        ->constrained('posts')
                        ->cascadeOnDelete();
                }

                if (! Schema::hasColumn('location_post', 'location_id')) {
                    $table->foreignId('location_id')
                        ->constrained('locations')
                        ->cascadeOnDelete();
                }

                $table->timestamps();

                $table->unique(['post_id', 'location_id']);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('location_post')) {
            Schema::dropIfExists('location_post');
        }
    }
};