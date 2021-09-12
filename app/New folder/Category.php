<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
    	return 'url';
    }

//    public function producto()
//    {
//        return $this->hasMany(Product::class, 'categorie_id');
//    }
//
//    public function submenu()
//    {
//    	return $this->hasMany(Submenu::class);
//    }

    public function setNameAttribute($name)
    {
    	$this->attributes['name'] = $name;
    	$this->attributes['url'] = Str::slug($name);
    }

}





