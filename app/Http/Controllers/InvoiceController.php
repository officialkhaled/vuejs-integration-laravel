<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Counter;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function getAllInvoices()
    {
        $invoices = Invoice::query()
            ->with('customer')
            ->latest()
            ->get();

        return response()->json([
            'data' => $invoices,
            'message' => 'Successfully Retrieved Invoices',
        ], 200);
    }

    public function searchInvoice(Request $request)
    {
        if ($request->id != null) {
            $invoice = Invoice::query()
                ->with('customer')
                ->where('id', 'LIKE', "%{$request->id}%")
                ->get();

            return response()->json([
                'data' => $invoice,
                'message' => 'Successfully Retrieved Searched Invoice',
            ], 200);
        } else {
            return $this->getAllInvoices();
        }
    }

    public function createInvoice(Request $request)
    {
        $counter = Counter::query()
            ->firstWhere('key', 'invoice');

        $random = $counter;

        $invoice = Invoice::query()
            ->orderBy('id', 'DESC')
            ->first();

        if ($invoice) {
            $invoice = $invoice->id + 1;
            $counters = $counter->value + $invoice;
        } else {
            $counters = $counter->value;
        }

        $formData = [
            'number' => $counter->prefix . $counters,
            'customer_id' => null,
            'customer' => null,
            'date' => date('Y-m-d'),
            'due_date' => null,
            'reference' => null,
            'discount' => 0,
            'terms_and_conditions' => 'Default Terms and Conditions',
            'items' => [
                'product_id' => null,
                'product' => null,
                'unit_price' => 0,
                'quantity' => 1,
            ],
        ];

        return response()->json([
            'data' => $formData,
            'message' => 'Successfully Created Invoice',
        ], 200);
    }

    public function editInvoice(Request $request)
    {

    }

    public function deleteInvoice(Request $request)
    {
//        if ($request->id != null) {
//            $invoice = Invoice::query()->where('id', $request->id)->delete();
//
//            return response()->json([
//                'data' => $this->getAllInvoices(),
//                'message' => 'Successfully Deleted Invoice',
//            ], 200);
//        } else {
//            return response()->json([
//                'message' => 'No Invoice Found',
//            ]);
//        }
    }
}
