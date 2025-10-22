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
        'invoice_id',
        'name',
        'price',
        'quantity',
        'quantity_type'
    ];

    public function invoice():BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
}
