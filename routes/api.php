<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-all-invoices', [InvoiceController::class, 'getAllInvoices']);
Route::get('search-invoice', [InvoiceController::class, 'searchInvoice']);
Route::get('create-invoice', [InvoiceController::class, 'createInvoice']);

Route::get('edit-invoice', [InvoiceController::class, 'editInvoice']);
Route::get('delete-invoice', [InvoiceController::class, 'deleteInvoice']);
