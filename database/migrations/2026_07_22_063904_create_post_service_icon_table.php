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
        if (! Schema::hasTable('post_service_icon')) {

            Schema::create('post_service_icon', function (Blueprint $table) {

                $table->id();

                $table->foreignId('post_id')
                    ->constrained('posts')
                    ->cascadeOnDelete();

                $table->foreignId('service_icon_id')
                    ->constrained('service_icons')
                    ->cascadeOnDelete();

                $table->timestamps();

            });

        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('post_service_icon')) {

            Schema::dropIfExists('post_service_icon');

        }
    }
};