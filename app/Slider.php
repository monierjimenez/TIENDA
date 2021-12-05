<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [] ;

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($slider){
            $slider->photos->each->delete();
        });
    }

    public function getRouteKeyName()
    {
    	return 'url';
    }

    public function photos()
    {
    	return $this->hasMany(Photo::class);
    }

    public function setTitleAttribute($name)
    {
        $this->attributes['name'] = $name ;
        $this->attributes['url'] = Str::slug($name) ;
    }
}
