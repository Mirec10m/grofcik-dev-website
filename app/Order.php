<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends BaseModel
{
    use HasFactory;

    public function order_items() : HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getFormattedStatusAttribute() : string
    {
        return [
            'received' => 'Prijatá',
            'shipped' => 'Odoslaná',
            'closed' => 'Uzavretá',
            'storno' => 'Stornovaná',
        ][$this->status];
    }

    public function getStatusClassAttribute() : string
    {
        return [
            'received' => 'info',
            'shipped' => 'warning',
            'closed' => 'success',
            'storno' => 'danger',
        ][$this->status];
    }

    public function getFormattedPriceAttribute() : string
    {
        return number_format($this->price, 2, ',', ' ');
    }

    public function getFormattedPaymentPriceAttribute() : string
    {
        return number_format($this->payment_price, 2, ',', ' ');
    }

    public function getFormattedDeliveryPriceAttribute() : string
    {
        return number_format($this->delivery_price, 2, ',', ' ');
    }

    public function getFormattedDeliveryPaymentPriceAttribute() : string
    {
        return number_format($this->delivery_price + $this->payment_price, 2, ',', ' ');
    }

    public function getItemsPriceAttribute() : string
    {
        return $this->order_items->sum(fn ($order_item) => $order_item->quantity * $order_item->unit_price);
    }

    public function getFormattedItemsPriceAttribute() : string
    {
        return number_format($this->items_price, 2, ',', ' ');
    }

    public function getFullPriceAttribute() : string
    {
        return $this->items_price + $this->delivery_price + $this->payment_price;
    }

    public function getFormattedFullPriceAttribute() : string
    {
        return number_format($this->full_price, 2, ',', ' ');
    }

}
