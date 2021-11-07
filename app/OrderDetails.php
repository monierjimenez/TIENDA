<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
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
