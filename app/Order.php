<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends BaseModel
{
    use HasFactory;

    public function getFormattedStatusAttribute()
    {
        return [
            'received' => 'Prijatá',
            'shipped' => 'Odoslaná',
            'closed' => 'Vybavená',
            'storno' => 'Stornovaná',
        ][$this->status];
    }

    public function getStatusClassAttribute()
    {
        return [
            'received' => 'text-info',
            'shipped' => 'text-warning',
            'closed' => 'text-success',
            'storno' => 'text-danger',
        ][$this->status];
    }

    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 2, ',', ' ');
    }

    public function getFormattedPaymentPriceAttribute()
    {
        return number_format($this->payment_price, 2, ',', ' ');
    }

    public function getFormattedDeliveryPriceAttribute()
    {
        return number_format($this->delivery_price, 2, ',', ' ');
    }

    public function getFormattedDeliveryPaymentPriceAttribute()
    {
        return number_format($this->delivery_price + $this->payment_price, 2, ',', ' ');
    }

}
