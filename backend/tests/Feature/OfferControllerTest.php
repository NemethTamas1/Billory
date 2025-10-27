<?php

namespace Tests\Feature;

use App\Models\Offer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class OfferControllerTest extends TestCase
{
    //test
    use DatabaseTransactions;

    public function test_offers_endpoint_can_be_reached(): void
    {
        $response = $this->get('/api/offers');

        $response->assertStatus(200);
    }

    public function test_offer_can_be_made(): void
    {
        $payload = [
            "customer_id" => 1,
            "valid_until" => "2025-10-25",
            "offer_number" => "UBULECK-23",
            "status" => "pending",
            "currency" => "HUF",
            "items" => [
                [
                    "name" => "Kissebbség írtás",
                    "price" => 20000,
                    "quantity" => 10,
                    "quantity_type" => "óra",
                    "tax_percent" => 30
                ],
                [
                    "name" => "Bográcsolás a parlament előtt",
                    "price" => 5000,
                    "quantity" => 8,
                    "quantity_type" => "óra",
                    "tax_percent" => 27
                ]
            ]
        ];

        $this->postJson('/api/offers', $payload);

        $offer = Offer::where('offer_number', 'UBULECK-23')->first();

        $this->assertCount(2, $offer->items);
    }
}
