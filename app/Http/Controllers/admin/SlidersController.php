<?php

namespace App\Http\Controllers\admin;

use App\Slider;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function store(Request $request)
    {
        //dd($request->get('name'));
      $this->validate($request, ['name' => 'required|unique:sliders,name']);

      $slider = Slider::create([
        'name' => $request->get('name'),
        'url' => Str::slug($request->get('name')),
        'publico' => '0',
      ]);
      return redirect()->route('admin.sliders.edit', $slider);
    }

    public function edit(Slider $slider)
    {
		return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Slider $slider, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:sliders,name,'.$slider->id,
        ]);

        $slider->url = Str::slug($request->get('name'));
        $slider->update($request->all());

	  	return redirect()->route('admin.sliders.edit', $slider)->with('flash', 'Slider ha sido guardado correctamente.');
    }

    public function destroy(Slider $slider)
    {
      $slider->delete();
      return redirect()->route('admin.sliders.index')->with('flash', 'Slider ha sido eliminado.');
	}
}
