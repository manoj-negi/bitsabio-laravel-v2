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
            Schema::hasColumn('interview_questions', 'average_salary')
        ) {

            // Convert existing string data to JSON
            DB::table('interview_questions')->get()->each(function ($row) {

                if (!empty($row->average_salary)) {

                    $parts = preg_split('/\s+to\s+/i', $row->average_salary);

                    DB::table('interview_questions')
                        ->where('id', $row->id)
                        ->update([
                            'average_salary' => json_encode([
                                'min_salary' => $parts[0] ?? null,
                                'max_salary' => $parts[1] ?? null,
                            ]),
                        ]);
                }

            });

            DB::statement('ALTER TABLE interview_questions MODIFY average_salary JSON NULL');
        }
    }

    /**
     * Reverse the migrations.
     */
      public function down(): void
    {
        if (
            Schema::hasTable('interview_questions') &&
            Schema::hasColumn('interview_questions', 'average_salary')
        ) {

            DB::table('interview_questions')->get()->each(function ($row) {

                $salary = json_decode($row->average_salary, true);

                DB::table('interview_questions')
                    ->where('id', $row->id)
                    ->update([
                        'average_salary' => ($salary['min_salary'] ?? '') .
                            ' to ' .
                            ($salary['max_salary'] ?? ''),
                    ]);
            });

            DB::statement('ALTER TABLE interview_questions MODIFY average_salary VARCHAR(255) NULL');
        }
    }
};