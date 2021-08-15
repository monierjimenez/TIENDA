<?php

namespace App\Http\Controllers\admin;

use Illuminate\Support\Str;

use App\Product;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    public function store($product)
    {
        $this->validate(request(), [
    		'photo' => 'required|image|max:2048'
		]);

        Photo::create([
            'product_id' => $product,
            'url' => request()->file('photo')->store('products')
        ]);
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        //unlink(public_path().'/images/'.$photo->url);
        return back()->with('flash', 'Photo delete successfully');
    }
}







