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
        if (!Schema::hasTable('tasks')) {

            Schema::create('tasks', function (Blueprint $table) {

                $table->id();

                // Project

                $table->foreignId('project_id')
                    ->constrained()
                    ->cascadeOnDelete();

                // Task

                $table->string('title');

                $table->text('description')->nullable();

                // Image

                $table->string('image')->nullable();

                // Status

                $table->enum('status', [
                    'Not Started',
                    'In Progress',
                    'Completed',
                    'On Hold',
                ])->default('Not Started');

                // Priority

                $table->enum('priority', [
                    'Low',
                    'Medium',
                    'High',
                ])->default('Medium');

                // Progress

                $table->unsignedTinyInteger('progress')
                    ->default(0);

                // Dates

                $table->date('start_date')->nullable();

                $table->date('due_date')->nullable();

                // Created By

                $table->foreignId('created_by')
                    ->nullable()
                    ->constrained('users')
                    ->nullOnDelete();

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
