<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "offer_id" => $this->offer_id,
            "name" => $this->name,
            "description" => $this->description,
            "quantity" => $this->quantity,
            "quantity_type" => $this->quantity_type,
            "unit_price_net" => $this->unit_price_net,
            "tax_percent" => $this->tax_percent,
            "total_net" => $this->total_net,
            "total_gross" => $this->total_gross,
        ];
    }
}
