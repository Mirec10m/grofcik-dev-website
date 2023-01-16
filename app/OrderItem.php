<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    use HasFactory;

    public function order() : BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function getFormattedUnitPriceAttribute() : string
    {
        return number_format($this->unit_price, 2, ',', ' ');
    }

    public function getFormattedFullPriceAttribute() : string
    {
        return number_format($this->unit_price * $this->quantity, 2, ',', ' ');
    }

}
