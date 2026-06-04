<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_no',
        'customer_id',
        'invoice_date',
        'due_date',
        'po_number',
        'subtotal',
        'tax_percentage',
        'tax_amount',
        'shipping',
        'discount',
        'total',
        'amount_paid',
        'balance_due',
        'notes',
        'terms',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($invoice) {

            $lastInvoice = self::latest('id')->first();

            $number = $lastInvoice
                ? ((int) str_replace('INV-', '', $lastInvoice->invoice_no)) + 1
                : 1;
            $invoice->invoice_no =
                'INV-' . str_pad($number, 5, '0', STR_PAD_LEFT);
        });
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }
}