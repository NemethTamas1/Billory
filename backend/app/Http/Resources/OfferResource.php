<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
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
            "offer_number" => $this->offer_number,
            "customer_id" => $this->customer_id,
            "net_total_amount" => $this->net_total_amount,
            "gross_total_amount" => $this->gross_total_amount,
            "items" => ItemResource::collection($this->whenLoaded("items")),
        ];
    }
}
