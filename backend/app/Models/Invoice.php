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
}
