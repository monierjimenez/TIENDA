<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $guarded = [];

    public function estado()
    {
        return $this->belongsTo(Estados::class, 'selectedEstado');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipios::class, 'selectedMunicipio');
    }
}
