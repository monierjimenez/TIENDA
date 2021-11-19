<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function color()
    {
        return $this->belongsTo(Colore::class);
    }

    public function spec()
    {
        return $this->belongsTo(Spec::class, 'model_product', 'name');
    }

    public function modelp()
    {
        return $this->belongsTo(Modelp::class, 'model_product', 'name');
    }

}
