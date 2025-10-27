<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Item extends Model
{
    public $timestamps = true;

    public $table = 'items';

    protected $fillable = [
        'offer_id',
        'name',
        "description",
        'quantity',
        'quantity_type',
        "unit_price_net",
        "tax_percent",
        'total_net',
        'total_gross',
        'price',
    ];

    public function offer():BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
