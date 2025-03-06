<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\BulkStoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Http\Resources\InvoiceCollection;
use Illuminate\Http\Request;
use App\Filters\InvoiceFilter;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new InvoiceFilter();
        $queryItems = $filter->transform($request);

        $query = Invoice::query();

        foreach ($queryItems as $queryItem) {
            $query->where(...$queryItem);
        }
        
        return new InvoiceCollection($query->paginate()->appends($request->query()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Bulk store invoices.
     */
    public function bulkStore(BulkStoreInvoiceRequest $request)
    {
        // Implementa la lógica para crear múltiples facturas aquí
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
