<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('interview_questions')) {

            Schema::table('interview_questions', function (Blueprint $table) {

                if (! Schema::hasColumn('interview_questions', 'average_salary')) {

                    $table->string('average_salary')
                        ->nullable()
                        ->after('short_description');

                }

            });

        }
    }

    public function down(): void
    {
        if (Schema::hasTable('interview_questions')
            && Schema::hasColumn('interview_questions', 'average_salary')) {

            Schema::table('interview_questions', function (Blueprint $table) {

                $table->dropColumn('average_salary');

            });

        }
    }
};