<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($product){
            $product->photos->each->delete();
        });
    }

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function categorie()
    {
        return $this->belongsTo(Category::class);
    }

    public function spec()
    {
        return $this->hasMany(Spec::class)->orderBy('sale_price', 'ASC');
    }

    public function brands()
    {
        return $this->hasMany(Brand::class, 'id', 'brand');
    }

    public function modelp()
    {
        return $this->hasMany(Modelp::class, 'id', 'model');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function setNameAttribute($name)
    {
        $this->attributes['name'] = $name;
        $this->attributes['url'] = Str::slug($name);
    }
}
