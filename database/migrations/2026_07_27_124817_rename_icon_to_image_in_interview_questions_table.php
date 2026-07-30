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
        if (
            Schema::hasTable('interview_questions') &&
            Schema::hasColumn('interview_questions', 'icon') &&
            ! Schema::hasColumn('interview_questions', 'image')
        ) {
            Schema::table('interview_questions', function (Blueprint $table) {
                $table->renameColumn('icon', 'image');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (
            Schema::hasTable('interview_questions') &&
            Schema::hasColumn('interview_questions', 'image') &&
            ! Schema::hasColumn('interview_questions', 'icon')
        ) {
            Schema::table('interview_questions', function (Blueprint $table) {
                $table->renameColumn('image', 'icon');
            });
        }
    }
};