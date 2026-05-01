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
            $table->string('phone')->nullable();

            $table->string('designation')->nullable();
            $table->decimal('salary', 10, 2)->nullable();

            $table->date('joining_date')->nullable();
            $table->date('leaving_date')->nullable();

            $table->integer('number_of_leaves')->default(5);

            $table->string('status')->default('active');

            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('phone');
        $table->dropColumn('designation');
        $table->dropColumn('salary');
        $table->dropColumn('joining_date');
        $table->dropColumn('leaving_date');
        $table->dropColumn('number_of_leaves');
        $table->dropColumn('status');
        $table->dropColumn('notes');
        });
    }
};
