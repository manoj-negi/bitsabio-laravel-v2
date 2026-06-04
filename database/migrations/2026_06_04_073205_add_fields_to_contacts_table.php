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
        if (Schema::hasTable('contacts')) {

            Schema::table('contacts', function (Blueprint $table) {

                if (! Schema::hasColumn('contacts', 'phone')) {
                    $table->string('phone')->nullable()->after('email');
                }

                if (! Schema::hasColumn('contacts', 'inquiry_type')) {
                    $table->string('inquiry_type')->nullable()->after('phone');
                }

                if (! Schema::hasColumn('contacts', 'course_name')) {
                    $table->string('course_name')->nullable()->after('project_type');
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {

            $columns = [];

            if (Schema::hasColumn('contacts', 'phone')) {
                $columns[] = 'phone';
            }

            if (Schema::hasColumn('contacts', 'inquiry_type')) {
                $columns[] = 'inquiry_type';
            }

            if (Schema::hasColumn('contacts', 'course_name')) {
                $columns[] = 'course_name';
            }

            if (! empty($columns)) {
                $table->dropColumn($columns);
            }
        });
    }
};
