<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("offers")->insert([
            [
                "offer_number" => "ABC123",
                "customer_id" => 1,
                "status" => "pending",
                "valid_until" => now()->addDays(30),
                "currency" => "HUF",
                "net_total_amount" => 10000,
                "gross_total_amount" => 15000,
                "tax_percent" => 27,
            ],
            [
                "offer_number" => "DEF456",
                "customer_id" => 1,
                "status" => "accepted",
                "valid_until" => now()->addDays(45),
                "currency" => "HUF",
                "net_total_amount" => 12000,
                "gross_total_amount" => 17000,
                "tax_percent" => 27,
            ]
        ]);
    }
}
