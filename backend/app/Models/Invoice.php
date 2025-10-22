<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    public $timestamps = true;

    public $table = "invoices";

    protected $fillable = [
        "invoice_number",
        "customer_id",
        "net_total_amount",
        "gross_total_amount"
    ];

    public function items():HasMany
    {
        return $this->hasMany(Item::class);
    }

    public function calculateTotals()
    {
        $net = $this->items->sum(function($item) {
            return $item->price * $item->quantity;
        });

        $gross = $net * 1.27;

        $this->update([
            "net_total_amount" => $net,
            "gross_total_amount" => $gross
        ]);
    }
}
