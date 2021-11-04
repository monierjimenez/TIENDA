<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCartDetail extends Model
{
    protected $fillable = [
        'shopping_cart_id', 'product_id', 'quantity', 'price', 'save', 'modelo', 'color',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function spec()
    {
        return $this->belongsTo(Spec::class, 'modelo');
    }

    public function colore()
    {
        return $this->belongsTo(Colore::class, 'color');
    }

    public function modelp()
    {
        return $this->belongsTo(Modelp::class, 'modelo');
    }
}
