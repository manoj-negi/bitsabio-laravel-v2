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
         if (!Schema::hasTable('invoices')) {

            Schema::create('invoices', function (Blueprint $table) {

                $table->id();

                $table->string('invoice_no')->unique();

                $table->foreignId('customer_id')
                    ->constrained()
                    ->cascadeOnDelete();

                $table->date('invoice_date');

                $table->date('due_date')->nullable();

                $table->string('po_number')->nullable();

                $table->decimal('subtotal', 12, 2)->default(0);

                $table->decimal('tax_percentage', 8, 2)->default(0);

                $table->decimal('tax_amount', 12, 2)->default(0);

                $table->decimal('shipping', 12, 2)->default(0);

                $table->decimal('discount', 12, 2)->default(0);

                $table->decimal('total', 12, 2)->default(0);

                $table->decimal('amount_paid', 12, 2)->default(0);

                $table->decimal('balance_due', 12, 2)->default(0);

                $table->longText('notes')->nullable();

                $table->longText('terms')->nullable();

                $table->enum('status', [
                    'draft',
                    'pending',
                    'paid',
                    'cancelled'
                ])->default('draft');

            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_items');
    }
};
