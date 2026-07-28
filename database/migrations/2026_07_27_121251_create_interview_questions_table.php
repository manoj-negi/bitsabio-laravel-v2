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
        if (! Schema::hasTable('interview_questions')) {

            Schema::create('interview_questions', function (Blueprint $table) {

                $table->id();
                $table->string('title');
                $table->string('slug')->unique();
                $table->string('icon')->nullable();
                $table->text('short_description')->nullable();
                $table->json('content')->nullable();
                $table->boolean('status')->default(true);
                $table->unsignedInteger('priority')->default(0);
                $table->timestamps();

            });

        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('interview_questions')) {
            Schema::dropIfExists('interview_questions');
        }
    }
};