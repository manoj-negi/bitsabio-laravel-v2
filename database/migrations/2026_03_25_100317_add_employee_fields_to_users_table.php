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
        Schema::table('users', function (Blueprint $table) {

            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable();
            }

            if (!Schema::hasColumn('users', 'designation')) {
                $table->string('designation')->nullable();
            }

            if (!Schema::hasColumn('users', 'salary')) {
                $table->decimal('salary', 10, 2)->nullable();
            }

            if (!Schema::hasColumn('users', 'joining_date')) {
                $table->date('joining_date')->nullable();
            }

            if (!Schema::hasColumn('users', 'leaving_date')) {
                $table->date('leaving_date')->nullable();
            }

            if (!Schema::hasColumn('users', 'number_of_leaves')) {
                $table->integer('number_of_leaves')->default(5);
            }

            if (!Schema::hasColumn('users', 'status')) {
                $table->string('status')->default('active');
            }

            if (!Schema::hasColumn('users', 'notes')) {
                $table->text('notes')->nullable();
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            if (Schema::hasColumn('users', 'phone')) {
                $table->dropColumn('phone');
            }

            if (Schema::hasColumn('users', 'designation')) {
                $table->dropColumn('designation');
            }

            if (Schema::hasColumn('users', 'salary')) {
                $table->dropColumn('salary');
            }

            if (Schema::hasColumn('users', 'joining_date')) {
                $table->dropColumn('joining_date');
            }

            if (Schema::hasColumn('users', 'leaving_date')) {
                $table->dropColumn('leaving_date');
            }

            if (Schema::hasColumn('users', 'number_of_leaves')) {
                $table->dropColumn('number_of_leaves');
            }

            if (Schema::hasColumn('users', 'status')) {
                $table->dropColumn('status');
            }

            if (Schema::hasColumn('users', 'notes')) {
                $table->dropColumn('notes');
            }

        });
    }
};