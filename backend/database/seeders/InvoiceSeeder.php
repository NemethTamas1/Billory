<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("invoices")->insert([
            [
                "invoice_number" => "ABC123",
                "customer_id" => 1,
                "net_total_amount" => 10000,
                "gross_total_amount" => 15000
            ],
            [
                "invoice_number" => "DEF456",
                "customer_id" => 1,
                "net_total_amount" => 12000,
                "gross_total_amount" => 17000
            ]
        ]);
    }
}
