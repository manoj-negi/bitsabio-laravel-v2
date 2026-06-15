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
        if (!Schema::hasTable('portfolios')) {

            Schema::create('portfolios', function (Blueprint $table) {
                $table->id();
                
                $table->string('title');
                $table->string('slug')->unique();
                $table->string('image');
                $table->string('problem_heading')->default('THE PROBLEM');
                $table->text('problem_description');
                $table->string('solution_heading')->default('OUR SOLUTION');
                $table->text('solution_description');
                $table->json('technologies')->nullable();
                $table->string('result_title');
                $table->text('result_description');
                $table->boolean('status')->default(true);

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
