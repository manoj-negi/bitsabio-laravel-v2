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
        if (! Schema::hasTable('service_icons')) {

            Schema::create('service_icons', function (Blueprint $table) {

                $table->id();

                $table->string('name');

                $table->string('image')->nullable();

                $table->text('description')->nullable();

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
        if (Schema::hasTable('service_icons')) {

            Schema::dropIfExists('service_icons');

        }
    }
};