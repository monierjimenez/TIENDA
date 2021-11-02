<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    protected $dates = ['order_date'];

    public function estado()
    {
        return $this->belongsTo(Estados::class, 'selectedEstado');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipios::class, 'selectedMunicipio');
    }

    public function shopping_cart()
    {
        return $this->belongsTo(ShoppingCart::class, 'shopping_cart_id');
    }
}
