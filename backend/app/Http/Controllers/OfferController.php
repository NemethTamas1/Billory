<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOfferRequest;
use App\Http\Requests\UpdateOfferRequest;
use App\Http\Resources\OfferResource;
use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Offer::with("items")->get();

        return OfferResource::collection($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOfferRequest $request)
    {
        $data = $request->validated();

        $offer = Offer::create([
            'customer_id' => $data['customer_id'],
            'status' => $data['status'],
            'offer_number' => $data['offer_number'],
            'valid_until' => $data['valid_until'],
            'currency' => $data['currency'],
            "net_total_amount" => 0,
            "gross_total_amount" => 0,
        ]);

        $netTotal = 0;
        $grossTotal = 0;

        foreach ($data['items'] as $item) {

            $taxPercent = $item['tax_percent'] ?? 27;

            $lineTotal = $item['price'] * $item['quantity'];
            $netTotal += $lineTotal;
            
            $totalGross = $lineTotal * (1 + $taxPercent / 100);
            $grossTotal += $totalGross;

            $offer->items()->create([
                'name' => $item['name'],
                'unit_price_net' => $item['price'],
                'quantity' => $item['quantity'],
                'quantity_type' => $item['quantity_type'],
                'total_net' => $lineTotal,
                'tax_percent' => $taxPercent,
                'total_gross' => $lineTotal * $item['tax_percent'] / 100,
            ]);
        }

        $offer->update([
            'net_total_amount' => $netTotal,
            'gross_total_amount' => $grossTotal,
        ]);

        return new OfferResource($offer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        $data = Offer::findOrFail($offer->id);

        $data->load("items");

        return new OfferResource($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOfferRequest $request, Offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        return ($offer->delete()) ? response()->noContent() : abort(500);
    }
}
