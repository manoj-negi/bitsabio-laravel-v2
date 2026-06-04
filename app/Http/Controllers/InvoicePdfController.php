<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Company;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoicePdfController extends Controller
{
    public function download(Invoice $invoice)
    {
        $company = Company::first();

        $pdf = Pdf::loadView(
            'pdf.invoice',
            compact('invoice', 'company')
        );

        return $pdf->download(
            $invoice->invoice_no . '.pdf'
        );
    }
}