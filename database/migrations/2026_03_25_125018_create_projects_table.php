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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();

            $table->string('client_name')->nullable();

            $table->enum('status', ['pending', 'in_progress', 'completed', 'on_hold'])
                ->default('pending');

            $table->enum('priority', ['low', 'medium', 'high'])
                ->default('medium');

            $table->integer('progress')->default(0);

            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            $table->date('start_date')->nullable();
            $table->date('deadline')->nullable();
            $table->timestamp('completed_at')->nullable();

            $table->decimal('budget', 10, 2)->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
