<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #000;
        }

        th,
        td {
            padding: 8px;
        }

        .no-border,
        .no-border td {
            border: none;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .heading {
            font-size: 24px;
            font-weight: bold;
        }

        .mt-20 {
            margin-top: 20px;
        }

        .mb-20 {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
<!-- Company Information -->

<table class="no-border">
    <tr>

        <td width="70%">

            <h2>
                {{ $company->company_name }}
            </h2>

            <p>
                {{ $company->address }}
            </p>

            <p>
                Email:
                {{ $company->email }}
            </p>

            <p>
                Phone:
                {{ $company->phone }}
            </p>

            <p>
                GST:
                {{ $company->gst_number }}
            </p>

            <p>
                Website:
                {{ $company->website }}
            </p>

        </td>

        <td width="30%" class="text-right">

            <div class="heading">
                INVOICE
            </div>

        </td>

    </tr>
</table>

<br>

<!-- Invoice Details -->

<table>

    <tr>
        <th>Invoice No</th>
        <td>{{ $invoice->invoice_no }}</td>

        <th>Status</th>
        <td>{{ strtoupper($invoice->status) }}</td>
    </tr>

    <tr>
        <th>Invoice Date</th>
        <td>{{ $invoice->invoice_date }}</td>

        <th>Due Date</th>
        <td>{{ $invoice->due_date }}</td>
    </tr>

    <tr>
        <th>PO Number</th>
        <td colspan="3">
            {{ $invoice->po_number }}
        </td>
    </tr>

</table>

<br>

<!-- Customer Information -->

<h3>Bill To</h3>

<table>

    <tr>

        <td>

            <strong>
                {{ $invoice->customer->name }}
            </strong>

            <br><br>

            Email:
            {{ $invoice->customer->email }}

            <br>

            Phone:
            {{ $invoice->customer->phone }}

            <br>

            Address:
            {{ $invoice->customer->address }}

            <br>

            {{ $invoice->customer->city }}

            {{ $invoice->customer->state }}

            <br>

            {{ $invoice->customer->country }}

        </td>

    </tr>

</table>

<br>

<!-- Invoice Items -->

<h3>Invoice Items</h3>

<table>

    <thead>

        <tr>

            <th>Description</th>

            <th>Quantity</th>

            <th>Rate</th>

            <th>Amount</th>

        </tr>

    </thead>

    <tbody>

        @forelse($invoice->items as $item)

            <tr>

                <td>
                    {{ $item->description }}
                </td>

                <td>
                    {{ $item->quantity }}
                </td>

                <td>
                    ₹{{ number_format($item->rate, 2) }}
                </td>

                <td>
                    ₹{{ number_format($item->amount, 2) }}
                </td>

            </tr>

        @empty

            <tr>

                <td colspan="4" class="text-center">
                    No items found
                </td>

            </tr>

        @endforelse

    </tbody>

</table>

<br>

<!-- Totals -->

<table>

    <tr>
        <th>Subtotal</th>
        <td>
            ₹{{ number_format($invoice->subtotal, 2) }}
        </td>
    </tr>

    <tr>
        <th>Tax (%)</th>
        <td>
            {{ $invoice->tax_percentage }}
        </td>
    </tr>

    <tr>
        <th>Tax Amount</th>
        <td>
            ₹{{ number_format($invoice->tax_amount, 2) }}
        </td>
    </tr>

    <tr>
        <th>Shipping</th>
        <td>
            ₹{{ number_format($invoice->shipping, 2) }}
        </td>
    </tr>

    <tr>
        <th>Discount</th>
        <td>
            ₹{{ number_format($invoice->discount, 2) }}
        </td>
    </tr>

    <tr>
        <th>Total</th>
        <td>
            ₹{{ number_format($invoice->total, 2) }}
        </td>
    </tr>

    <tr>
        <th>Amount Paid</th>
        <td>
            ₹{{ number_format($invoice->amount_paid, 2) }}
        </td>
    </tr>

    <tr>
        <th>Balance Due</th>
        <td>
            ₹{{ number_format($invoice->balance_due, 2) }}
        </td>
    </tr>

</table>

<br>

<!-- Notes -->

@if($invoice->notes)

    <h3>Notes</h3>

    <p>
        {{ $invoice->notes }}
    </p>

@endif

<!-- Terms -->

@if($invoice->terms)

    <h3>Terms & Conditions</h3>

    <p>
        {{ $invoice->terms }}
    </p>

@endif

<br>

<hr>

<p class="text-center">
    Thank you for your business.
</p>


</body>

</html>
