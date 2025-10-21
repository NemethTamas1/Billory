<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use App\Http\Resources\InvoiceResource;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Invoice::all();

        return InvoiceResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvoiceRequest $request)
    {
        $data = $request->validated();

        $newInvoice = Invoice::create($data);

        return new InvoiceResource($newInvoice);
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        $data = Invoice::findOrFail($invoice->id);

        return new InvoiceResource($data);
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
        return ($invoice->delete()) ? response()->noContent() : abort(500);
    }
}
