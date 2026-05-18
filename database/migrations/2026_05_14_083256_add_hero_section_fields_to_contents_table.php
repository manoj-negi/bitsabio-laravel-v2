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
        Schema::table('contents', function (Blueprint $table) {

            $table->string('hero_title_black')->nullable();

            $table->string('hero_title_blue')->nullable();

            $table->text('hero_description')->nullable();

            $table->string('hero_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contents', function (Blueprint $table) {

            $table->dropColumn([

                'hero_title_black',
                'hero_title_blue',
                'hero_description',
                'hero_image',
            ]);
        });
    }
};